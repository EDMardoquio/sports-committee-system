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
    <!-- Title Page-->
    <title>Returned Item</title>


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



        <!-- MAIN CONTENT-->


        <div class="main-content" style="font-family: Times New Roman;">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="overview-wrap" style="margin-left:-310px; ">
                                <h3 class="title-1">Returned Item</h2>
                            </div>
                        </div>
                    </div>


                    <div class="row m-t-30">
                        <div class="col-md-12">
                            <!-- DATA TABLE-->
                            <div class="table-responsive m-b-40" style="margin-left:-310px; ">
                                <table class="display table table-borderless table-data3" id="example">
                                    <thead>
                                        <tr style="background-color:lightgray;">

                                            <th>Trans#</th>
                                            <th>Name</th>
                                            <th>Barangay</th>
                                            <th>item</th>
                                            <th>Date/Time</th>
                                            <th>Date Return</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                   include 'connection/db_connection.php';
                   $result = mysqli_query($connection, "SELECT * FROM `returned_item`");
                   while($row = mysqli_fetch_array($result)){

                  ?>
                                        <tr class="tr-shadow">


                                            <td><?php echo $row['return_id'];?></td>
                                            <td><?php echo $row['fname'];?>&nbsp<?php echo $row['lname'];?> </td>
                                            <td><?php echo $row['barangay'];?></td>
                                            <td> <?php echo $row['item'];?>&nbsp<strong>(<?php echo $row['quantity'];?>)<strong>
                                            </td>
                                            <td> <?php echo $row['date_time_borrow'];?> </td>
                                            <td> <?php echo $row['date_time_returned'];?> </td>
                                            <td><?php echo $row['status'];?></td>


                                        </tr>
                                        <?php };?>

                            </div>

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