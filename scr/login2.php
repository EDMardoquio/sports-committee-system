<?php
session_start();
include_once 'connection/db_connection.php';
include_once 'includes/csrf.php';

$msg = "";

// Brute force protection config
define('MAX_LOGIN_ATTEMPTS', 5);
define('LOGIN_ATTEMPT_INTERVAL_MINUTES', 15);

function getClientIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

// Create login_attempts table if it doesn't exist (run this once)
// CREATE TABLE login_attempts (
//   id INT AUTO_INCREMENT PRIMARY KEY,
//   user_log VARCHAR(255) NOT NULL,
//   ip_address VARCHAR(45) NOT NULL,
//   attempt_time DATETIME NOT NULL
// );

if (isset($_POST['login'])) {
    // CSRF check
    if (!validate_csrf_token($_POST['csrf_token'])) {
        echo "<script>alert('CSRF validation failed.'); document.location.href = 'login2.php';</script>";
        exit;
    }

    $email = mysqli_real_escape_string($connection, $_POST['user_log']);
    $password = $_POST['pass'];  // no md5 here since you're comparing hashes later

    $ip_address = getClientIP();

    // Check if too many failed attempts in the last LOGIN_ATTEMPT_INTERVAL_MINUTES
    $interval_start = date("Y-m-d H:i:s", strtotime("-" . LOGIN_ATTEMPT_INTERVAL_MINUTES . " minutes"));

    $stmt = $connection->prepare("SELECT COUNT(*) FROM login_attempts WHERE user_log = ? AND attempt_time > ?");
    $stmt->bind_param("ss", $email, $interval_start);
    $stmt->execute();
    $stmt->bind_result($attempt_count);
    $stmt->fetch();
    $stmt->close();

    if ($attempt_count >= MAX_LOGIN_ATTEMPTS) {
        echo "<script>alert('Too many failed login attempts. Please try again after " . LOGIN_ATTEMPT_INTERVAL_MINUTES . " minutes.'); document.location.href = 'login2.php';</script>";
        exit;
    }

    // Proceed with login check
    $sql = mysqli_query($connection, "SELECT * FROM users WHERE user_log='$email'");
    $num = mysqli_num_rows($sql);

    if ($num > 0) {
        $row = mysqli_fetch_assoc($sql);

        // Your passwords in DB seem to be MD5 hashed, so compare with md5()
        if (md5($password) === $row['pass']) {
            // Success: clear old failed attempts for this user
            $delete_stmt = $connection->prepare("DELETE FROM login_attempts WHERE user_log = ?");
            $delete_stmt->bind_param("s", $email);
            $delete_stmt->execute();
            $delete_stmt->close();

            $_SESSION['user_log'] = $email;
            $_SESSION['users_id'] = $row['users_id'];

            if ($row['role'] == "admin") {
                echo "<script>alert('Successfully Login!!'); document.location.href = 'inVENTORY.php';</script>";
            } elseif ($row['role'] == "barangay") {
                echo "<script>alert('Successfully Login!!'); document.location.href = 'announcement1.php';</script>";
            } else {
                echo "<script>alert('Role not recognized.'); document.location.href = 'login2.php';</script>";
            }
        } else {
            // Insert failed attempt record
            $insert_stmt = $connection->prepare("INSERT INTO login_attempts (user_log, ip_address, attempt_time) VALUES (?, ?, NOW())");
            $insert_stmt->bind_param("ss", $email, $ip_address);
            $insert_stmt->execute();
            $insert_stmt->close();

            echo "<script>alert('Invalid password.'); document.location.href = 'login2.php';</script>";
        }
    } else {
        echo "<script>alert('User not found.'); document.location.href = 'login2.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Login</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="assets/login_assets/images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="assets/login_assets/vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/login_assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/login_assets/fonts/iconic/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/login_assets/vendor/animate/animate.css" />
    <link rel="stylesheet" type="text/css" href="assets/login_assets/vendor/css-hamburgers/hamburgers.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/login_assets/vendor/animsition/css/animsition.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/login_assets/vendor/select2/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/login_assets/vendor/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/login_assets/css/util.css" />
    <link rel="stylesheet" type="text/css" href="assets/login_assets/css/main.css" />
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('images/biglogo.png');">
        <div class="wrap-login100">
            <form method="post" class="login100-form validate-form">
                <span class="login100-form-logo d-flex justify-content-center align-items-center" style="background-image: url('images/biglogo.png'); background-size:cover; border:2px solid black;"></span>
                <span class="login100-form-title p-b-34 p-t-27">Log in</span>

                <input type="hidden" name="csrf_token" value="<?php echo generate_csrf_token(); ?>" />

                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input class="input100" type="text" name="user_log" placeholder="User Log" autocomplete="off" required />
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="pass" placeholder="Password" required />
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit" id="login" name="login">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-90">
                    <a class="txt1" href="new_user.php">Don't Have an Account? Sign Up Here.</a>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="dropDownSelect1"></div>

<script src="assets/login_assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="assets/login_assets/vendor/animsition/js/animsition.min.js"></script>
<script src="assets/login_assets/vendor/bootstrap/js/popper.js"></script>
<script src="assets/login_assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/login_assets/vendor/select2/select2.min.js"></script>
<script src="assets/login_assets/vendor/daterangepicker/moment.min.js"></script>
<script src="assets/login_assets/vendor/daterangepicker/daterangepicker.js"></script>
<script src="assets/login_assets/vendor/countdowntime/countdowntime.js"></script>
<script src="assets/login_assets/js/main.js"></script>

</body>
</html>
