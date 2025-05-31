<?php
session_start();
include_once 'connection/db_connection.php';
include_once 'includes/csrf.php';

$msg = "";

if (isset($_POST['signup'])) {
    if (!validate_csrf_token($_POST['csrf_token'])) {
        $msg = "CSRF validation failed.";
    } else {
        $user_log = trim($_POST['user_log']);
        $password = $_POST['pass'];
        $role = "admin";  // Force role as admin

        if (empty($user_log) || empty($password)) {
            $msg = "Please fill in all fields.";
        } else {
            $stmt = $connection->prepare("SELECT users_id FROM users WHERE user_log = ?");
            $stmt->bind_param("s", $user_log);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $msg = "Username already exists.";
            } else {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $insert_stmt = $connection->prepare("INSERT INTO users (user_log, pass, role) VALUES (?, ?, ?)");
                $insert_stmt->bind_param("sss", $user_log, $hash, $role);

                if ($insert_stmt->execute()) {
                    // Redirect to login page after success
                    header("Location: login2.php?signup=success");
                    exit;
                } else {
                    $msg = "Error creating admin user.";
                }

                $insert_stmt->close();
            }

            $stmt->close();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create New Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Keep your existing styles here -->
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

                <span class="login100-form-title p-b-34 p-t-27">Create New Admin</span>

                <input type="hidden" name="csrf_token" value="<?php echo generate_csrf_token(); ?>" />

                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input class="input100" type="text" name="user_log" placeholder="Username" autocomplete="off" required />
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="pass" placeholder="Password" required />
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit" id="signup" name="signup">Create Admin</button>
                </div>

                <div class="text-center p-t-90">
                    <a class="txt1" href="login2.php">Back to Login</a>
                </div>

                <?php if ($msg): ?>
                    <div class="text-center p-t-20" style="color: yellow; font-weight: bold;">
                        <?php echo htmlspecialchars($msg); ?>
                    </div>
                <?php endif; ?>

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
