<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="images/biglogo.png">



    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Title Page-->
    <title>Game Schedule</title>


    <?php require 'header.php'; ?>

<body class="animsition">



    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">

                <div class="modal-header">
                    <h3 style=" font-family:arial;">Information</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">





                    <form method="POST" action="index.php" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Sports Code</label>
                            <div class="col-sm-9">

                                <input type="text" style="width:265px; height:30px;" value="SPORTS-<?php 
        $prefix= md5(time()*rand(1, 2)); echo strip_tags(substr($prefix ,0,4));?>" name="sports_idcode" Readonly
                                    Required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Sports</label>
                            <div class="col-12 col-md-9">
                                <select name="title" id="sports" class="form-control">
                                    <option value="">Please select</option>
                                    <option value="Basketball">Basketball</option>
                                    <option value="Volleyball">Volleyball</option>
                                    <option value="Badminton">Badminton</option>
                                    <option value="Tennis">Table Tennis</option>
                                    <option value="Chess">Chess</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="des" required autocomplete="off">
                            </div>



                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Start Date</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="date" name="start" required
                                    autocomplete="off">
                            </div>



                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Start Time</label>
                            <div class="col-sm-9">
                                <input type="time" class="form-control" name="start_time" required autocomplete="off">
                            </div>



                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">End Time</label>
                            <div class="col-sm-9">
                                <input type="time" class="form-control" name="time">
                            </div>



                        </div>
                        <div class="form-group row">



                        </div>
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-primary" name="save"><i class="fas fa-save"></i>
                                Save</button>



                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-ban"></i>
                                Cancel</button>
                        </div>

                    </form>
                    <?php

  include 'connection/db_connection.php';

        if (isset($_POST['save'])) {

          $sports_idcode = $_POST['sports_idcode'];
          $title = $_POST['title'];
          $des = $_POST['des'];
          $start = $_POST['start'];
		  $end = $_POST['start_time'];
		  $time = $_POST['time'];



            $sql = "INSERT INTO sports(sports_code,sports_idcode,title,description,start_date,start_time,time)
            VALUES('','$sports_idcode','$title','$des','$start','$end','$time')";

  $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));


            if (!$result){
              echo '<script>alert("Something Went Wrong");</script>';
            }
            else {
              echo '<script>alert("Saved");</script>';
            }

          }

          else {

        }

       ?>


                </div>


            </div>

        </div>
    </div>







    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php require 'nav_mobile.php'; ?>
        <?php require 'sidebar/dashboard_sidebar.php'; ?>

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

            <div class="main-content" style="font-family: Times New Roman;">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap" style="margin-left:-310px; ">
                                    <h2 class="title-1">Game Schedule</h2>



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
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal"
                                            data-target="#myModal">
                                            <i class="zmdi zmdi-plus"></i>Add</button>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2" style="margin-left:-310px; ">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>

                                                <th>Sports ID</th>
                                                <th>Sports Code</th>
                                                <th>Sports</th>
                                                <th>Description</th>
                                                <th>Date</th>
                                                <th>Start Time</th>
                                                <th>End Time</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                         include 'connection/db_connection.php';
                                         $result = mysqli_query($connection, "SELECT * FROM `sports`  WHERE status = '' ORDER BY sports_code DESC");
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

                                                <?php


$startdate = date("Y-m-d");
  if($row['start_date']==$startdate){
      echo '<td style="color:green; "><strong>Ongoing</strong></td>';
    }
    else if($row['start_date']<$startdate){
        echo '<td style="color:red;"><strong> Match end</strong></td>';
      }
	      else{
        echo '<td style="color:orange;"><strong>Pending</strong></td>';
      }

?>



                                                <td>

                                                    <div class="table-data-feature">

                                                        <button class="item" data-toggle="tooltip" data-placement="top"
                                                            title="Edit"><a
                                                                href="update_sports.php?sports_code=<?php echo $row['sports_code']; ?>">
                                                                <i class="zmdi zmdi-edit"></i></a>
                                                        </button>

                                                        <form
                                                            action='index.php?sports_code="<?php echo $row['sports_code'] ?>"'
                                                            method="post">

                                                            <input type="hidden" name="sports_code"
                                                                value="<?php echo $row['sports_code']; ?>">
                                                            <input type="hidden" name="title"
                                                                value="<?php echo $row['title']; ?>">
                                                            <input type="hidden" name="description"
                                                                value="<?php echo $row['description']; ?>">
                                                            <input type="hidden" name="start_date"
                                                                value="<?php echo $row['start_date']; ?>">
                                                            <input type="hidden" name="start_time"
                                                                value="<?php echo $row['start_time']; ?>">
                                                            <input type="hidden" name="time"
                                                                value="<?php echo $row['time']; ?>">

                                                            <button class="item" data-toggle="tooltip"
                                                                data-placement="top" title="Delete" name="delete"
                                                                type="submit">
                                                                <i class="zmdi zmdi-archive"></i>
                                                            </button>
                                                        </form>
                                                    </div>

                                                </td>


                                            </tr>
                                            <tr class="spacer"></tr>

                                            <?php };?>

                                            <?php
               include 'connection/db_connection.php';
              if (isset($_POST['delete'])) {

				        $place = "index.php";

                $sports_code = $_POST['sports_code'];

                $res = mysqli_query($connection, "DELETE FROM `sports` WHERE `sports_code` = '$sports_code'");

                if($res){
                     echo '<script>alert("Successfully deleted");</script>';
				          	 echo '<script>self.location="'.$place.'";</script>';

                     $sports_code = $_POST['sports_code'];
                     $title = $_POST['title'];
                     $description = $_POST['description'];
                     $start_date = $_POST['start_date'];
                     $end_date = $_POST['start_time'];
                     $time = $_POST['time'];

                     $sql = "INSERT INTO archive(no,title,decription,start_date,start_time,time)
                     VALUES('$sports_code','$title','$description','$start_date','$end_date','$time')";

                    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

                }
              }
             ?>
                                            </form>
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
                <script type="text/javascript">
                $(function() {
                    var dtToday = new Date();

                    var month = dtToday.getMonth() + 1;
                    var day = dtToday.getDate();
                    var year = dtToday.getFullYear();
                    if (month < 10)
                        month = '0' + month.toString();
                    if (day < 10)
                        day = '0' + day.toString();

                    var minDate = year + '-' + month + '-' + day;

                    $('#date').attr('min', minDate);
                });
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

    <?php require 'footer.php'; ?>
    