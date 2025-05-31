<?php
include 'connection/db_connection.php';
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Announcement</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FontAweome CDN Link for Icons -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" /> -->
    <link rel="shortcut icon" href="images/biglogo.png">
    <?php require 'header1.php'; ?>
</head>

<body style="background:#E5E5E5;">


    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php require 'nav_mobile.php'; ?>
        <?php require 'sidebar/dashboard_sidebar.php'; ?>


        <!-- PAGE CONTAINER-->
        <div class="page-container" style="width:100%;">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                            </form>
                            <div class="content">
                                <div class="image">

                                </div>
                                <a class="js-acc-btn"></a>
                            </div>
                        </div>
                    </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->

            <div class="main-content">
                <div class="container">
                    <div class="wrapper">
                        <section class="post">

                            <header>Announcement</header>
                            <form action="post.php" method="POST">
                                <?php

                $sqlget1 = "SELECT *
            FROM users
            WHERE role = 'admin';";
                $sqldata1 = mysqli_query($connection, $sqlget1) or die("Unable to display: " . mysqli_connect_error());
                while ($row = mysqli_fetch_assoc($sqldata1)) { ?>
                                <div class="content">
                                    <div class="details">
                                        <p>Sports Committee Head</p>
                                    </div>
                                </div>
                                <?php
                }
                ?>
                                <textarea placeholder="Announcements" name="post" spellcheck="false"
                                    required></textarea>


                                <button class="au-btn au-btn--block au-btn--primary m-b-20" type="submit"
                                    name="submit">Post</button>
                            </form>
                        </section>

                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->

    </div>
    <!-- END HEADER MOBILE-->

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="vendor/DataTables-master/media/js/jquery.dataTables.js"></script>

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

    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="js/poypoy.js"> </script> 