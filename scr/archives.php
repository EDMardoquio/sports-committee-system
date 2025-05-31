<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <link rel="shortcut icon" href="images/biglogo.png">

    <!-- Title Page-->
    <title>Dashboard</title>


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





                    <form method="POST" action="archives.php" enctype="multipart/form-data">


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
                                <input type="date" class="form-control" name="start" required autocomplete="off">
                            </div>



                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">End Date</label>
                            <div class="col-sm-9">
                                <input type="time" class="form-control" name="end" required autocomplete="off">
                            </div>



                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Time</label>
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

          $title = $_POST['title'];
          $des = $_POST['des'];
          $start = $_POST['start'];
		  $end = $_POST['end'];
		  $time = $_POST['time'];



            $sql = "INSERT INTO sports(sports_code,title,description,start_date,start_time,time)
            VALUES('','$title','$des','$start','$end','$time')";

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

            <!-- MAIN CONTENT-->

            <div class="main-content">
                <div class="section__content section__content--p30" style="margin-left: -260px;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap" style="font-family:Times New Roman;">
                                    <h2 class="title-1">Sports Archives</h2>



                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-6 well"
                            style="margin-left:20px; background:white; border-radius:5px;width:75%; height: 50px;">
                            <form class="form-inline" method="POST" action="">
                                <label style="margin-left:10px; margin-top:-10px;">Date:</label>
                                <input style="margin-left:10px; margin-top:-10px; height:25px; font-size:10px;"
                                    type="date" class="form-control" placeholder="Start" name="date1"
                                    value="<?php echo isset($_POST['date1']) ? $_POST['date1'] : '' ?>" />
                                <label style="margin-left:10px; margin-top:-10px;">To</label>
                                <input style="margin-left:10px; margin-top:-10px; height:25px; font-size:10px;"
                                    type="date" class="form-control" placeholder="End" name="date2"
                                    value="<?php echo isset($_POST['date2']) ? $_POST['date2'] : '' ?>" />
                                <button style="margin-left:10px; margin-top:-6px; font-size:10px;"
                                    class="btn btn-primary" name="search">Search</button> <a
                                    style="margin-left:30px; margin-top:-36px; font-size:10px; margin-left:410px;"
                                    href="archives.php" type="button" class="btn btn-success">Refresh</a>
                            </form>
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
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2" style="font-family:Times New Roman;">
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
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
	
    include 'connection/db_connection.php';
    if(ISSET($_POST['search'])){
        $date1 = date("Y-m-d", strtotime($_POST['date1']));
        $date2 = date("Y-m-d", strtotime($_POST['date2']));
        $query=mysqli_query($connection, "SELECT * FROM `sports` WHERE  date(`start_date`) BETWEEN '$date1' AND '$date2' ") or die(mysqli_error());
        $row=mysqli_num_rows($query);
        if($row>0){
            while($fetch=mysqli_fetch_array($query)){
?>
                                        <td><?php echo $fetch['sports_code'];?></td>
                                        <td><?php echo $fetch['sports_idcode'];?></td>
                                        <td><?php echo $fetch['title'];?></td>
                                        <td><strong><?php echo $fetch['description'];?></strong></td>
                                        <td> <?php echo $fetch['start_date'];?> </td>
                                        <td> <?php echo $fetch['start_time'];?> </td>
                                        <td> <?php echo $fetch['time'];?> </td>
                                        <?php


$startdate = date("Y-m-d");
  if($fetch['start_date']==$startdate){
      echo '<td style="color:green; "><strong>Ongoing</strong></td>';
    }
    else if($fetch['start_date']<$startdate){
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
                                                        href="undo.php?id=<?php echo $fetch['sports_code']; ?>">
                                                        <i class="zmdi zmdi-undo"></i></a>
                                                </button>

                                                <form
                                                    action='archives.php?sports_code="<?php echo $fetch['sports_code'] ?>"'
                                                    method="post">

                                                    <input type="hidden" name="sports_code"
                                                        value="<?php echo $fetch['sports_code']; ?>">
                                                    <input type="hidden" name="title"
                                                        value="<?php echo $fetch['title']; ?>">
                                                    <input type="hidden" name="description"
                                                        value="<?php echo $fetch['description']; ?>">
                                                    <input type="hidden" name="start_date"
                                                        value="<?php echo $fetch['start_date']; ?>">
                                                    <input type="hidden" name="end_date"
                                                        value="<?php echo $fetch['start_time']; ?>">
                                                    <input type="hidden" name="time"
                                                        value="<?php echo $fetch['time']; ?>">

                                                    <button class="item" data-toggle="tooltip" data-placement="top"
                                                        title="Delete" name="delete" type="submit">
                                                        <i class="zmdi zmdi-archive"></i>
                                                    </button>
                                                </form>
                                            </div>

                                        </td>


                                        <?php
            }
        }else{
            echo'
            <tr>
                <td colspan = "4"><center>Record Not Found</center></td>
            </tr>';
        }
    }else{
        $query=mysqli_query($connection, "SELECT * FROM `sports`  where status = 'archive'") or die(mysqli_error());
        while($fetch=mysqli_fetch_array($query)){
?>
                                        <tr>
                                        <tr>
                                            <td><?php echo $fetch['sports_code'];?></td>
                                            <td><?php echo $fetch['sports_idcode'];?></td>
                                            <td><?php echo $fetch['title'];?></td>
                                            <td><strong><?php echo $fetch['description'];?></strong></td>
                                            <td> <?php echo $fetch['start_date'];?> </td>
                                            <td> <?php echo $fetch['start_time'];?> </td>
                                            <td> <?php echo $fetch['time'];?> </td>
                                            <?php


$startdate = date("Y-m-d");
  if($fetch['start_date']==$startdate){
      echo '<td style="color:green; "><strong>Ongoing</strong></td>';
    }
    else if($fetch['start_date']<$startdate){
        echo '<td style="color:red;"><strong> Match end</strong></td>';
      }
	      else{
        echo '<td style="color:orange;"><strong>Pending</strong></td>';
      }

?>
                                            <td>

                                                <div class="table-data-feature">

                                                    <button class="item" data-toggle="tooltip" data-placement="top"
                                                        title="Undo"><a
                                                            href="undo.php?id=<?php echo $fetch['sports_code']; ?>">
                                                            <i class="zmdi zmdi-undo"></i></a>
                                                    </button>

                                                    <form
                                                        action='archives.php?sports_code="<?php echo $fetch['sports_code'] ?>"'
                                                        method="post">

                                                        <input type="hidden" name="sports_code"
                                                            value="<?php echo $fetch['sports_code']; ?>">
                                                        <input type="hidden" name="title"
                                                            value="<?php echo $fetch['title']; ?>">
                                                        <input type="hidden" name="description"
                                                            value="<?php echo $fetch['description']; ?>">
                                                        <input type="hidden" name="start_date"
                                                            value="<?php echo $fetch['start_date']; ?>">
                                                        <input type="hidden" name="end_date"
                                                            value="<?php echo $fetch['start_time']; ?>">
                                                        <input type="hidden" name="time"
                                                            value="<?php echo $fetch['time']; ?>">

                                                        <button class="item" data-toggle="tooltip" data-placement="top"
                                                            title="Delete" name="delete" type="submit">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </form>
                                                </div>

                                            </td>



                                        </tr>

                                        </tr>

                                        <?php
        }
    }
?>

                                        <?php
      include 'connection/db_connection.php';
      if (isset($_POST['delete'])) {

                $place = "archives.php";

        $sports_code = $_POST['sports_code'];

        $res = mysqli_query($connection, "DELETE FROM `sports` WHERE `sports_code` = '$sports_code'");

        if($res){
             echo '<script>alert("Successfully deleted");</script>';
                       echo '<script>self.location="'.$place.'";</script>';

             $sports_code = $_POST['sports_code'];
             $title = $_POST['title'];
             $description = $_POST['description'];
             $start_date = $_POST['start_date'];
             $end_date = $_POST['end_date'];
             $time = $_POST['time'];

             $sql = "INSERT INTO archive(no,title,decription,start_date,end_date,time)
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