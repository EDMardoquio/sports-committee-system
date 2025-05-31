<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <link rel="shortcut icon" href="images/biglogo.png">

    <!-- Title Page-->
    <title>Register</title>


  <?php require 'header.php'; ?>


<body class="animsition">

    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
<?php require 'nav_mobile.php'; ?>
<?php require 'sidebar/user-sidebar.php'; ?>
</div>
        <!-- END HEADER MOBILE-->

        <!-- PAGE CONTAINER-->
   
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->


            <div class="main-content" style="font-family: Times New Roman;">
                <div class="section__content section__content--p30" >
                <!--    <div class="container-fluid"> -->
<!--Form> -->

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Register</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="index2.php" method="post" enctype="multipart/form-data" class="form-horizontal">

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Last Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="last_name" class="form-control" required>

                                                </div>
                                            </div>
											                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">First Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="first" class="form-control" required>

                                                </div>
                                            </div>
											                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Middle Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="mid_name" class="form-control" required>

                                                </div>
                                            </div>

											    <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Gender</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="gender" id="gender" class="form-control" required>
                                                        <option value="">Select Gender</option>
														<option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
												</div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Age</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="age" id="age" class="form-control" required>
                                                        <option value="">Please select</option>
                                                        <option value="7-11 years old">7-11 years old</option>
                                                        <option value="12-18 years old">12-18 years old</option>
                                                        <option value="19 and above">19 and above</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Sports to join</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="sports" id="sports" class="form-control" required>
                                                        <option value="">Please select</option>
                                                        <option value="Basketball">Basketball</option>
                                                        <option value="Volleyball">Volleyball</option>
                                                        <option value="Badminton">Badminton</option>
														                            <option value="Table Tennis">Table Tennis</option>
											                            			<option value="Chess">Chess</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Barangay</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="barangay" id="barangay" class="form-control" required>
                                                        <option value="">Please select</option>
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
											                                    <div class="card-footer">
                                        <button type="submit" name="save" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>


                                    </div>
<?php

  include 'connection/db_connection.php';

        if (isset($_POST['save'])) {

          $last_name = $_POST['last_name'];
		  $first_name = $_POST['first'];
		  $mid_name = $_POST['mid_name'];
          $gender = $_POST['gender'];
          $age = $_POST['age'];
          $sports = $_POST['sports'];
		  $barangay = $_POST['barangay'];

            $sql = "INSERT INTO info(registration_no,last_name,first_name,mid_name,gender,age,sports,barangay,date_register)
            VALUES('','$last_name','$first_name','$mid_name','$gender','$age','$sports','$barangay',Now())";

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

											</form>
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

                </div>


                        <?php require 'footer.php'; ?>
