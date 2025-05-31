<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/design.css">
    <link rel="shortcut icon" href="images/biglogo.png">

    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
    <!-- Title Page-->
    <title>Game Schedule</title>


    <?php require 'header.php'; ?>

<body class="animsition">


    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php require 'nav_mobile.php'; ?>
        <?php require 'sidebar/user-sidebar.php'; ?>


    </div>
    <!-- END HEADER MOBILE-->





    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->

        <!-- HEADER DESKTOP-->



        <!-- MAIN CONTENT-->


        <div class="main-content" style="font-family: Times New Roman;">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="overview-wrap">
                                <h3 class="title-1" style="margin-left:-310px;">Game Schedule</h2>
                            </div>
                        </div>
                    </div>


                    <div class="row m-t-30">
                        <div class="col-md-12">
                            <!-- DATA TABLE-->
                            <div class="table-responsive m-b-40" style="margin-left:-310px; ">

                                <table class="display table table-borderless table-data3" style="width: 100%;"
                                    id="example">
                                    <thead>
                                        <tr style="background-color:lightgray;">

                                            <th>Sports ID</th>
                                            <th>Sports Code</th>
                                            <th>Sports</th>
                                            <th>Description</th>
                                            <th>Date</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                   include 'connection/db_connection.php';
                   $result = mysqli_query($connection, "SELECT * FROM `sports` ORDER BY sports_code DESC ");
                   while($row = mysqli_fetch_array($result)){

                  ?>
                                        <tr class="tr-shadow">


                                            <td><?php echo $row['sports_code'];?></td>
                                            <td><?php echo $row['sports_idcode'];?></td>
                                            <td><?php echo $row['title'];?></td>
                                            <td><strong><?php echo $row['description'];?></strong></td>

                                            <td> <?php echo $row['start_date'];?> </td>
                                            <td> <?php echo $row['start_time'];?> </td>
                                            <td> <?php echo $row['time'];?> </td>

                                            <td>
                                                <form action="gameschedule.php" method="POST"
                                                    enctype="multipart/form-data">

                                                    <input type="hidden" name="trans_id"
                                                        value="<?php echo $row['sports_idcode'];?>">
                                                    <input type="hidden" name="fname"
                                                        value="<?php echo $row['title'];?>">
                                                    <input type="hidden" name="lname"
                                                        value="<?php echo $row['description'];?>">
                                                    <input type="hidden" name="barangay"
                                                        value="<?php echo $row['start_date'];?>">
                                                    <input type="hidden" name="item"
                                                        value="<?php echo $row['start_time'];?>">
                                                    <input type="hidden" name="quantity"
                                                        value="<?php echo $row['time'];?>">

                                            </td>
                                        </tr>
                                        <?php };?>


                                        </form>

                            </div>
                            <?php

include 'connection/db_connection.php';

if (isset($_POST['submit'])) {

$trans_id=$_POST['trans_id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$barangay = $_POST['barangay'];
$item = $_POST['item'];
$quantity = $_POST['quantity'];
$date_time_borrow = $_POST['date_time_borrow'];

$sql1 = "INSERT INTO returned_item(return_id,fname,lname,barangay,item,quantity,date_time_borrow,date_time_returned)
VALUES('$trans_id','$fname','$lname','$barangay','$item','$quantity','$date_time_borrow',Now())";

$res = mysqli_query($connection, $sql1) or die(mysqli_error($connection));

$res = mysqli_query($connection, "DELETE FROM `borrow` WHERE `trans_id` = '$trans_id'");

 if (!$res){
   echo '<script>alert("Something Went Wrong");</script>';
 }
 else {
   echo '<script>alert("Item Returned");</script>';

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