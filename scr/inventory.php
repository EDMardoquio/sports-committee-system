<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/biglogo.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="stylesheet" href="css/design.css">
    <!-- Title Page-->
    <title>Dashboard</title>

    <link rel="stylesheet" href="assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">


    <?php require 'header.php'; ?>

<body class="animsition">


    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php require 'nav_mobile.php'; ?>


        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                <div class="navbar-bg"></div>
                <nav class="navbar navbar-expand-lg main-navbar sticky">
                    <div class="form-inline mr-auto">
                        <ul class="navbar-nav mr-3">
                            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>


                        </ul>
                    </div>
                    <ul class="navbar-nav navbar-right">
                        <li>
                            <a href="logout.php" style="font-size: 10px; color:red;">
                                <i class="fas fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </nav>
                <div class="main-sidebar sidebar-style-2">
                    <aside id="sidebar-wrapper">
                        <div class="sidebar-brand">
                            <a href="inventory.php"> <img alt="image" src="images/msc_logo.png" width="60" class="header-logo" /> <span class="logo-name">MSCSUP</span>
                            </a>
                        </div>
                        <ul class="sidebar-menu">
                            <li class="menu-header"></li>
                            <li class="dropdown ">
                                <a href="inventory.php" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
                            </li>
                            <li class="dropdown">
                                <a href="index.php" class="nav-link"><i data-feather="cast"></i><span>Game Schedule</span></a>
                            </li>
                            <li class="dropdown">
                                <a href="registered.php" class="nav-link"><i data-feather="check-circle"></i><span>Registered</span></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Inventory</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="item_request.php">Item Request</a></li>
                                    <li><a class="nav-link" href="borrowed_item.php">Borrowed Item</a></li>
                                    <li><a class="nav-link" href="returned_item.php">Returned Item</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="announcement.php" class="nav-link"><i data-feather="align-justify"></i><span>Announcement</span></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="archive"></i><span>Archives</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="archives.php">Sports Archives</a></li>
                                    <li><a class="nav-link" href="archivesitemreq.php">Borrow Archives</a></li>
                                </ul>
                            </li>

                        </ul>
                    </aside>
                </div>
                <!-- Main Content -->
                <div class="main-content">
                    <section class="section">

                        <div class=" d-flex justify-content-between align-items-center mb-4">
                            <h2 class="title-1">Dashboard</h2>
                            <button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#addstock">
                                <i class="zmdi zmdi-plus"></i>Add Item</button>
                                
                        </div>



                        <div class="row ">
                            <?php

                            include 'connection/db_connection.php';
                            $result = mysqli_query($connection, "SELECT SUM(stocks) FROM `inventory`");
                            $row = mysqli_fetch_array($result);
                            $total = $row[0];

                            $result1 = mysqli_query($connection, "SELECT SUM(quantity) FROM `borrow`");
                            $row1 = mysqli_fetch_array($result1);
                            $total1 = $row1[0];

                            $result2 = mysqli_query($connection, "SELECT SUM(quantity) FROM `returned_item`");
                            $row2 = mysqli_fetch_array($result2);
                            $total2 = $row2[0];

                            $result3 = mysqli_query($connection, "SELECT COUNT(registration_no) FROM `info`");
                            $row3 = mysqli_fetch_array($result3);
                            $total3 = $row3[0];


                            $total3 = $total - $total1;

                            ?>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-statistic-4">
                                        <div class="align-items-center justify-content-between">
                                            <div class="row ">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                                    <div class="card-content">
                                                        <h5 class="font-15">Total Equipment <br>/Item </h5>
                                                        <h2 class="mb-3 font-18"></h2>
                                                        <p class="mb-0"><span class="col-green"><?php echo $total; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                                    <div class="banner-img">
                                                        <img src="images/equipment.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-statistic-4">
                                        <div class="align-items-center justify-content-between">
                                            <div class="row ">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                                    <div class="card-content">
                                                        <h5 class="font-15"> Total Borrowed</h5>
                                                        <h2 class="mb-3 font-18"></h2>
                                                        <p class="mb-0"><span class="col-orange"><?php echo $total1; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                                    <div class="banner-img">
                                                        <img src="images/borrow.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-statistic-4">
                                        <div class="align-items-center justify-content-between">
                                            <div class="row ">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                                    <div class="card-content">
                                                        <h5 class="font-15">Total Returned Item</h5>
                                                        <h2 class="mb-3 font-18"></h2>
                                                        <p class="mb-0"><span class="col-green"><?php echo $total2; ?></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                                    <div class="banner-img">
                                                        <img src="assets/img/banner/3.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-statistic-4">
                                        <div class="align-items-center justify-content-between">
                                            <div class="row ">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                                    <div class="card-content">
                                                        <h5 class="font-15">Item Remainings</h5>
                                                        <h2 class="mb-3 font-18"></h2>
                                                        <p class="mb-0"><span class="col-green"><?php echo $total3; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                                    <div class="banner-img">
                                                        <img src="images/remaining.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-statistic-4">
                                        <div class="align-items-center justify-content-between">
                                            <div class="row ">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                                    <div class="card-content">
                                                        <h5 class="font-15"> <?php
                                                                                $sql = "SELECT * FROM info";
                                                                                if ($result = mysqli_query($connection, $sql)) {
                                                                                    $rowcount = mysqli_num_rows($result);
                                                                                    echo "<h2 class='number'>" . $rowcount;
                                                                                    "</h2>";
                                                                                    echo "<br>";
                                                                                    echo "<span class='desc'>Total Registered</span>";
                                                                                }
                                                                                ?></h5>
                                                        <h2 class="mb-3 font-18"></h2>
                                                        <p class="mb-0"><span class="col-green"></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                                    <div class="banner-img">
                                                        <img src="assets/img/banner/4.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>






                    </section>

                </div>

            </div>
        </div>



    </div>
    <!-- END HEADER MOBILE-->







    <!-- MODAL-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="" method="POST">
                        </form>
                        <div class="header-button">
                            <div class="noti-wrap">

                            </div>
                        </div>
                    </div>
                </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- add stock -->

        <div class="modal fade" id="addstock" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticModalLabel">Add Stock</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="inventory.php" method="POST" enctype="multipart/form-data">
                            <p>
                            <div class="row form-group">
                                <div class="col-3">
                                    <label>Stock</label>
                                </div>
                                <div class="col col-sm-9">
                                    <input type="number" name=stock class="form-control" min="0">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-3">
                                    <label>Item</label>
                                </div>
                                <div class="col col-sm-9">
                                    <select name="item" id="item" class="form-control" required>
                                        <option value="">Please select</option>
                                        <option value="basketball">Basketball(Ball)</option>
                                        <option value="volleyBall">VolleyBall(Ball)</option>
                                        <option value="volleyball net">Volleyball Net</option>
                                        <option value="Chessboard">Chessboard</option>
                                        <option value="Table Tennis Ball">Table Tennis Ball</option>
                                        <option value="Badminton net">Badminton net</option>
                                        <option value="Table tennis net">Table tennis net</option>
                                    </select>
                                </div>
                            </div>

                            </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="stock_button2" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="stock_button1" name="add">Add</button>
                    </div>
                    </form>

                    <?php

                    include 'connection/db_connection.php';

                    if (isset($_POST['add'])) {

                        $stock = $_POST['stock'];
                        $item = $_POST['item'];


                        $sql = "INSERT INTO inventory(stocks,item)
 VALUES('$stock','$item')";

                        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));


                        if (!$result) {
                            echo '<script>alert("Something Went Wrong");</script>';
                        } else {
                            echo '<script>alert("Added");</script>';
                        }
                    } else {
                    }

                    ?>


                </div>
            </div>
        </div>



        <!-- end modal static -->

        <!-- MAIN CONTENT-->



    </div>
    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
    </div>




    </div>

    <?php require 'footer.php'; ?>

   
  