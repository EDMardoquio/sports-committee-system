<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/biglogo.png">


    <!-- Title Page-->
    <title>Sign Up</title>

    <!--sweet alert -->

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="assets/login_assets/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login_assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login_assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login_assets/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login_assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login_assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login_assets/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login_assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login_assets/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/login_assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/login_assets/css/main.css">
    <!--===============================================================================================-->

</head>

<body class="animsition" style="background-image: url('images/bg.png'); background-size:cover; background-repeat:no-repeat; color:white;">
    <div class="page-wrapper" >
        <div class="page-content--bge5">
            <div class="container p-5">
                <div class="row ">
                    <div class="col-4 d-flex justify-content-end p-0 align-items-center respbar">
                        <img src="images/LEFT1.png" alt="">
                    </div>
                    <div class="col" style=" background: #9EC9F7;
                                                 background: -webkit-linear-gradient(top, #39457C, #7271E1);
                                                    background: -o-linear-gradient(top, #39457C, #7271E1);
                                                    background: -moz-linear-gradient(top, #39457C, #7271E1);
                                                    background: linear-gradient(top, #39457C, #7271E1); ">
                                                                            <div class="login-content">

                            <div class="login-form">

                                <div class="card-header">
                                    <strong>Sign Up</strong>
                                </div><br>
                                <form method="post">

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">User Log</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input class="input100" type="text" style="width:265px; height:30px;" value="USER-<?php
                                                                                                                                $prefix = md5(time() * rand(1, 2));
                                                                                                                                echo strip_tags(substr($prefix, 0, 4)); ?>" name="user_log" Readonly Required>
                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Last Name</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" name="last_name" class="form-control" autocomplete="off" required>

                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">First Name</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" name="first_name" class="form-control" autocomplete="off" required>

                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Mid Name</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" name="mid_name" class="form-control" autocomplete="off" required>

                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="select" class=" form-control-label">Barangay</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="barangay" id="barangay" class="form-control" required>
                                                <option value="">Select Barangay</option>
                                                <option value="Alipit">Alipit</option>
                                                <option value="Bagumbayan">Bagumbayan</option>
                                                <option value="Bubukal">Bubukal</option>
                                                <option value="Calios">Calios</option>
                                                <option value="Duhat">Duhat</option>
                                                <option value="Gatid">Gatid</option>
                                                <option value="Jasaan">Jasaan</option>
                                                <option value="Labuin">Labuin</option>
                                                <option value="Malinao">Malinao</option>
                                                <option value="Oogong">Oogong</option>
                                                <option value="Pagsawitan">Pagsawitan</option>
                                                <option value="Palasan">Palasan</option>
                                                <option value="Patimbao">Patimbao</option>
                                                <option value="Poblacion I">Poblacion I</option>
                                                <option value="Poblacion II">Poblacion II</option>
                                                <option value="Poblacion III">Poblacion III</option>
                                                <option value="Poblacion IV">Poblacion IV</option>
                                                <option value="Poblacion V">Poblacion V</option>
                                                <option value="Poblacion VI">Poblacion VI</option>
                                                <option value="Poblacion VII">Poblacion VII</option>
                                                <option value="Poblacion VIII">Poblacion VIII</option>
                                                <option value="San Jose">San Jose</option>
                                                <option value="San Juan">San Juan</option>
                                                <option value="San Pablo Norte">San Pablo Norte</option>
                                                <option value="San Pablo Sur">San Pablo Sur</option>
                                                <option value="Santisima Cruz">Santisima Cruz</option>
                                                <option value="Santo Angel Central">Santo Angel Central</option>
                                                <option value="Santo Angel Norte">Santo Angel Norte</option>
                                                <option value="Santo Angel Sur">Santo Angel Sur</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Password</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="password" name="pass" class="form-control" required>

                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Re enter Password</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="password" name="con_pass" class="form-control" required>

                                        </div>
                                    </div>

                                    <div class="container-login100-form-btn ">
                                        <button class="login100-form-btn" type="submit" name="submit">Register</button>

                                    </div>
                                    <div class="d-flex justify-content-center mt-4" >
                                        <a class="txt1 text-center" href="login2.php" >
                                            Click me to login
                                        </a>
                                    </div>





                                    <?php
                                    include_once 'connection/db_connection.php';
                                    if (isset($_POST['submit'])) {
                                        $user_log = $_POST['user_log'];
                                        $last_name = $_POST['last_name'];
                                        $first_name = $_POST['first_name'];
                                        $mid_name = $_POST['mid_name'];
                                        $barangay = $_POST['barangay'];
                                        $pass = mysqli_real_escape_string($connection, $_POST['pass']);
                                        $pword = md5($pass);
                                        $repass = mysqli_real_escape_string($connection, $_POST['con_pass']);
                                        $pword1 = md5($repass);
                                        $role = "barangay";
                                        $sql = "INSERT INTO users (user_log,last_name,first_name,mid_name,barangay,pass,con_pass,role)
                            VALUES ('$user_log','$last_name','$first_name','$mid_name','$barangay','$pword','$pword1','$role')";
                                        if (mysqli_query($connection, $sql)) {
                                            echo
                                            "<script>
                                alert('Successfully Login!!');
                                document.location.href = 'new_user.php';
                                </script>
                                ";
                                        } else {
                                            echo "Error: " . $sql . "
                        " . mysqli_error($connection);
                                        }
                                        mysqli_close($connection);
                                    }
                                    ?>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->