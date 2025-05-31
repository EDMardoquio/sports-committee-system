<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>  
    <link rel="shortcut icon" href="images/biglogo.png">

    <!-- Title Page-->
    <title>Borrow Equipment</title>


  <?php require 'header.php'; ?>

<body class="animsition">


    <div class="page-wrapper">
        <!-- HEADER MOBILE-->

        <?php require 'nav_mobile.php'; ?>
<?php require 'sidebar/user-sidebar.php'; ?>


        <!-- END HEADER MOBILE-->

    
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->

            <div class="main-content"style="font-family: Times New Roman;">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
<!--Form -->
<div class="col-lg-9" style="margin-top:30px; ">
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2" style="font-family: Time New Roman;">Borrow Equipment</h3>
            </div>
            <hr>
            <form action="borrow.php" method="POST" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="control-label mb-1">First Name</label>
                            <input type="text" name="fname" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label class="control-label mb-1">Last Name</label>
                        <div class="input-group">
                          <input type="text" name="lname" class="form-control" required>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label mb-1">Barangay</label>
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
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                    <label class="control-label mb-1">Equipment/Item</label>
                        <select name="item" id="item" class="form-control" required>
                            <option value="">Please select</option>
                            <option value="Basketball(Ball)">Basketball(Ball)</option>
                            <option value="VolleyBall(Ball)">VolleyBall(Ball)</option>
                            <option value="VolleyBall Net">Volleyball Net</option>
                            <option value="Chessboard">Chessboardt</option>
                            <option value="Table Tennis Ball">Table Tennis Ball</option>
                            <option value="Badminton Net">Badminton Net</option>
                            <option value="Table Tennis  Net">Table Tennis  Net</option>
                        </select>
                      </div>
                    </div>
                  <div class="col-6">
                    <div class="form-group">
                    <label class="control-label mb-1">Quantity</label>
                    <input type="number" name="quantity" max="5" min="0" class="form-control" required>
                  </div>
                </div>
                </div>
                <div class="form-group">
                    <label class="control-label mb-1">Date Return</label>
                 <input type="date" id="date" name="date_return" class="form-control" required>
                </div>

                <div>
                    <button type="submit" name="submit" class="btn btn-lg btn-info">Request</button>
                </div>


            </form>
            <?php

   include 'connection/db_connection.php';

         if (isset($_POST['submit'])) {

           $fname = $_POST['fname'];
           $lname = $_POST['lname'];
           $barangay = $_POST['barangay'];
           $item = $_POST['item'];
           $quantity = $_POST['quantity'];
           $date_return = $_POST['date_return'];
           $status = "Pending";

             $sql = "INSERT INTO Item_request(trans_id,fname,lname,barangay,item,quantity,date_time_borrow,date_return,status)
             VALUES('','$fname','$lname','$barangay','$item','$quantity',Now(),'$date_return','$status')";

   $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

             if (!$result){
               echo '<script>alert("Something Went Wrong");</script>';
             }
             else {
               echo '<script>alert("Request Sent");</script>';
             }

           }

           else {

         }

        ?>
        </div>
    </div>
</div>


                        </div>


                           </div>


</div>


<script type="text/javascript">

</script>
<script type="text/javascript">
$(function(){
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

    var minDate= year + '-' + month + '-' + day;

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
