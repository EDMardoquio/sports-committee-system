<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="shortcut icon" href="images/msc_logo.png">

    <!-- Title Page-->
    <title>Barangay</title>


  <?php require 'header.php'; ?>


<body class="animsition">




    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
<?php require 'nav_mobile.php'; ?>
<?php require 'sidebar/dashboard_sidebar.php'; ?>
</div>
        <!-- END HEADER MOBILE-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">

                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->


            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Barangays in Sta Cruz</h2>
                                    


                                </div>
                            </div>
                        </div>
 <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35"></h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        
                                      
                                  
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>

                                                <th>Barangay Number</th>
                                                <th>Barangay</th>
                                                <th>Zipcode</th>
											
                                            </tr>
                                        </thead>
                                        <tbody>
										                                        <?php

                                         include 'connection/db_connection.php';
                                         $result = mysqli_query($connection, "SELECT * FROM `barangay`");
                                         while($row = mysqli_fetch_array($result)){

                                        ?>
                                            <tr class="tr-shadow">


                                                <td><?php echo $row['barangay_no'];?></td>
                                                <td><?php echo $row['barangay'];?></td>
                                                <td><?php echo $row['Zipcode'];?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
											<tr class="spacer"></tr>
                                            <?php };?>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>

						</div>

                           </div>

</div>

<script type="text/javascript">

</script>



<div class="row">
    <div class="col-md-12">
        <div class="copyright">
            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
                    </div>

                </div>


                        <?php require 'footer.php'; ?>
