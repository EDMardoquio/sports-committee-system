<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/biglogo.png">
    <link rel="stylesheet" href="css/design.css">

    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">

    <style>
        
    .return_button1 {

        color: white;
        border: 2px solid #FFF;
        background-color: red;
        padding: 5px;
        border-radius: 10%;

    }

    .return_button1:hover {
        background-color: red;
    } 
        .img-thumbnail{
            margin-top: 3%;
            margin-left: 23%;
        }
        .fw-bold{
            font-family: "Old English Text MT";
        }
        .text{
         margin-left: -28%; 
         margin-top: 3%; 
         font-family: Verdana; 
         font-size: 10px;
        }
        @media screen and (max-width: 992px) {
            .img-thumbnail{
            margin-top: 3%;
            margin-left: 13%;
        }
        .text{
         margin-left: -15%; 
         margin-top: 3%;  
        }
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Title Page-->
    <title>Item Request</title>


    <?php require 'header.php'; ?>

<body class="animsition">




    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php require 'nav_mobile.php'; ?>



        <!-- MENU SIDEBAR-->
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
                            <a href="inventory.php"> <img alt="image" src="images/msc_logo.png" width="60"
                                    class="header-logo" /> <span class="logo-name">MSCSUP</span>
                            </a>
                        </div>
                        <ul class="sidebar-menu">
                            <li class="menu-header"></li>
                            <li class="dropdown ">
                                <a href="inventory.php" class="nav-link"><i
                                        data-feather="monitor"></i><span>Dashboard</span></a>
                            </li>
                            <li class="dropdown">
                                <a href="index.php" class="nav-link"><i data-feather="cast"></i><span>Game
                                        Schedule</span></a>
                            </li>
                            <li class="dropdown">
                                <a href="registered.php" class="nav-link"><i
                                        data-feather="check-circle"></i><span>Registered</span></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                        data-feather="briefcase"></i><span>Inventory</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="item_request.php">Item Request</a></li>
                                    <li><a class="nav-link" href="borrowed_item.php">Borrowed Item</a></li>
                                    <li><a class="nav-link" href="returned_item.php">Returned Item</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="announcement.php" class="nav-link"><i
                                        data-feather="align-justify"></i><span>Announcement</span></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                                        data-feather="archive"></i><span>Archives</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="archives.php">Sports Archives</a></li>
                                    <li><a class="nav-link" href="archivesitemreq.php">Borrow Archives</a></li>
                                </ul>
                            </li>

                        </ul>
                    </aside>
                </div>
                <!-- END MENU SIDEBAR-->

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


                <div class="main-content" style="margin-left: -250px;">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="overview-wrap" style="font-family:Times New Roman; ">
                                        <h2 class="title-1">Item Request</h2>

                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-3"></div>
                            <br>
                            
                            <div class="col-md-6 "
                                style=" background:white; border-radius:5px; width:800px; height: 50px;">
                                <form class="form-inline" method="POST" action="">
                                    <label style="margin-left:10px; margin-top:10px;">Date:</label>
                                    <input style="margin-left:10px; margin-top:10px; height:25px; font-size:10px;"
                                        type="date" class="form-control" placeholder="Start" name="date1"
                                        value="<?php echo isset($_POST['date1']) ? $_POST['date1'] : '' ?>" />
                                    <label style="margin-left:10px; margin-top:10px;">To</label>
                                    <input style="margin-left:10px; margin-top:10px; height:25px; font-size:10px;"
                                        type="date" class="form-control" placeholder="End" name="date2"
                                        value="<?php echo isset($_POST['date2']) ? $_POST['date2'] : '' ?>" />

                                    <div class="d-flex justify-content-between "
                                        style="margin-left:450px; margin-top:-40px;">
                                        <button class="btn btn-primary m-2" style="width:100px;"
                                            name="search">Search</button>
                                        <a href="item_request.php" style="width:100px;" type="button"
                                            class="btn btn-success m-2">Refresh</a>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="display table table-borderless table-data3"
                                        style="font-family:Times New Roman; " id="example">
                                        
                                        <thead>
                                            <tr style="background-color: lightgray;">

                                                <th>Trans#</th>
                                                <th>Name</th>
                                                <th>Barangay</th>
                                                <th>item</th>
                                                <th>Date/Time</th>
                                                <th>Return Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
	
    include 'connection/db_connection.php';
    if(ISSET($_POST['search'])){
        $date1 = date("Y-m-d", strtotime($_POST['date1']));
        $date2 = date("Y-m-d", strtotime($_POST['date2']));
        $query=mysqli_query($connection, "SELECT * FROM `Item_request` WHERE  date(`date_return`)  BETWEEN '$date1' AND '$date2' ") or die(mysqli_error());
        $row=mysqli_num_rows($query);
        if($row>0){
            while($fetch=mysqli_fetch_array($query)){
?>
                                            <tr class="tr-shadow">

                                                <form action="item_request.php" method="POST"
                                                    enctype="multipart/form-data">

                                                    <input type="hidden" name="trans_id"
                                                        value="<?php echo $fetch['trans_id'];?>">
                                                    <input type="hidden" name="fname"
                                                        value="<?php echo $fetch['fname'];?>">
                                                    <input type="hidden" name="lname"
                                                        value="<?php echo $fetch['lname'];?>">
                                                    <input type="hidden" name="barangay"
                                                        value="<?php echo $fetch['barangay'];?>">
                                                    <input type="hidden" name="item"
                                                        value="<?php echo $fetch['item'];?>">
                                                    <input type="hidden" name="quantity"
                                                        value="<?php echo $fetch['quantity'];?>">
                                                    <input type="hidden" name="date_time_borrow"
                                                        value="<?php echo $fetch['date_time_borrow'];?>">
                                                    <input type="hidden" name="date_return"
                                                        value="<?php echo $fetch['date_return'];?>">

                                                    <td><?php echo $fetch['trans_id'];?></td>
                                                    <td><?php echo $fetch['fname'];?>&nbsp<?php echo $fetch['lname'];?>
                                                    </td>
                                                    <td><?php echo $fetch['barangay'];?></td>
                                                    <td> <?php echo $fetch['item'];?>&nbsp<strong>(<?php echo $fetch['quantity'];?>)<strong>
                                                    </td>
                                                    <td> <?php echo $fetch['date_time_borrow'];?> </td>
                                                    <td> <?php echo $fetch['date_return'];?> </td>

                                                    <td>

                                                </form>

                                                </td>
                                            </tr>


                                            <?php
            }
        }else{
            echo'
            <tr>
                <td colspan = "4"><center>Record Not Found</center></td>
            </tr>';
        }
    }else{
        $query=mysqli_query($connection, "SELECT * FROM `Item_request` where status = 'Pending'") or die(mysqli_error());
        while($fetch=mysqli_fetch_array($query)){
?>
                                            <tr class="tr-shadow">

                                                <form action="item_request.php" method="POST"
                                                    enctype="multipart/form-data">

                                                    <input type="hidden" name="trans_id"
                                                        value="<?php echo $fetch['trans_id'];?>">
                                                    <input type="hidden" name="fname"
                                                        value="<?php echo $fetch['fname'];?>">
                                                    <input type="hidden" name="lname"
                                                        value="<?php echo $fetch['lname'];?>">
                                                    <input type="hidden" name="barangay"
                                                        value="<?php echo $fetch['barangay'];?>">
                                                    <input type="hidden" name="item"
                                                        value="<?php echo $fetch['item'];?>">
                                                    <input type="hidden" name="quantity"
                                                        value="<?php echo $fetch['quantity'];?>">
                                                    <input type="hidden" name="date_time_borrow"
                                                        value="<?php echo $fetch['date_time_borrow'];?>">
                                                    <input type="hidden" name="date_return"
                                                        value="<?php echo $fetch['date_return'];?>">

                                                    <td><?php echo $fetch['trans_id'];?></td>
                                                    <td><?php echo $fetch['fname'];?>&nbsp<?php echo $fetch['lname'];?>
                                                    </td>
                                                    <td><?php echo $fetch['barangay'];?></td>
                                                    <td> <?php echo $fetch['item'];?>&nbsp<strong>(<?php echo $fetch['quantity'];?>)<strong>
                                                    </td>
                                                    <td> <?php echo $fetch['date_time_borrow'];?> </td>
                                                    <td> <?php echo $fetch['date_return'];?> </td>

                                                    <td>

                                                        <button name="submit" type="submit" class="return_button2"
                                                            title="Approve">Approve</button>

                                                </form>
                                                <a href="delete_item_requests.php?id=<?php echo $fetch['trans_id']; ?>"
                                                    class=" return_button1">Reject</a>

                                                </td>
                                            </tr>

                                            <?php
        }
    }
?>



                                            <?php

include 'connection/db_connection.php';

if (isset($_POST['submit'])) {

$trans_id=$_POST['trans_id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$barangay = $_POST['barangay'];
$item = $_POST['item'];
$quantity = $_POST['quantity'];
$date_return = $_POST['date_return'];
$status = "Approved";

 $sql1 = "INSERT INTO borrow(trans_id,fname,lname,barangay,item,quantity,date_time_borrow,date_return,status)
 VALUES('$trans_id','$fname','$lname','$barangay','$item','$quantity',Now(),'$date_return','$status')";

$res = mysqli_query($connection, $sql1) or die(mysqli_error($connection));

 if (!$res){
   echo '<script>alert("Something Went Wrong");</script>';
 }
 else {
   echo '<script>alert("Approved!");</script>';

   $res2 = mysqli_query($connection, "DELETE FROM `item_request` WHERE `trans_id` = '$trans_id'");
echo '<script>self.location="'.$place.'";</script>';
 }

}

else {

}


?>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>

                        </div>



                        <script type="text/javascript">

                        </script>



                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
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
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-header">
                    <h3 style=" font-family:arial;"></h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">

                    <form action="item_request.php" method="POST" enctype="multipart/form-data">

                        <div class="row form-group">

                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Reason of Reject</label>
                            </div>

                            <div class="col-12 col-md-9">
                                <input type="text" name="description" class="form-control">

                            </div>
                        </div>
                        <?php
                        include 'connection/db_connection.php';
        $query=mysqli_query($connection, "SELECT * FROM `Item_request` ") or die(mysqli_error());
        $row=mysqli_num_rows($query);
        if($row>0){
            while($fetch=mysqli_fetch_array($query)){
?>
                        <div class="card-footer">
                            <a type="send" name="send"
                                href="delete_item_requests.php?id=<?php echo $fetch['trans_id']; ?>"
                                class="return_button1">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </a>

                            <?php
            }
            }
            ?>

                        </div>

                    </form>
                    <!-- <?php

include 'connection/db_connection.php';

if (isset($_POST['send'])) {
$desc = $_POST['description'];

 $sql1 = "INSERT INTO item_request(description)
 VALUES('$desc')";

$res = mysqli_query($connection, $sql1) or die(mysqli_error($connection));

 if (!$res){
   echo '<script>alert("Something Went Wrong");</script>';
 }
 else {
   echo '<script>alert("Approved!");</script>';

   $res2 = mysqli_query($connection, "DELETE FROM `item_request` WHERE `trans_id` = '$trans_id'");
 }

}

else {

}


?> -->


                </div>


            </div>

        </div>
    </div>

    <?php require 'footer.php'; ?>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src=""></script>

    <script>
    $(document).ready(function() {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
    });
    </script>