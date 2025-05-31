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
<style>
    .return_button1{
	
	color:  white;
	border:2px solid #FFF;
	background-color:red;
	padding:5px;
	border-radius:10%;
	
}

.return_button1:hover{
	background-color:red;
}
</style>
    <!-- Title Page-->
    <title>Borrow Reject</title>


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
                                <h2 class="title-1">Item Request</h2>

                            </div>
                        </div>
                    </div>

      <div class="row m-t-30">
      <div class="col-md-12">
          <!-- DATA TABLE-->
          <div class="table-responsive m-b-40">
              <table class="table table-borderless table-data3">
                                                          <thead>
                      <tr>

                          <th >Trans#</th>
                          <th>Name</th>
                          <th>Barangay</th>
                          <th>item</th>
                          <th>Date/Time</th>
                          <th>Return Date</th>
                          <th>Status</th>
                      </tr>
                  </thead>
                  <tbody>

                     <?php

                   include 'connection/db_connection.php';
                   $result = mysqli_query($connection, "SELECT * FROM `Item_request` WHERE status = 'Reject'");
                   while($row = mysqli_fetch_array($result)){

                  ?>
                      <tr class="tr-shadow">

                        <form action="#" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="trans_id" value="<?php echo $row['trans_id'];?>">
                        <input type="hidden" name="fname" value="<?php echo $row['fname'];?>">
                        <input type="hidden" name="lname" value="<?php echo $row['lname'];?>">
                        <input type="hidden" name="barangay" value="<?php echo $row['barangay'];?>">
                        <input type="hidden" name="item" value="<?php echo $row['item'];?>">
                        <input type="hidden" name="quantity" value="<?php echo $row['quantity'];?>">
                        <input type="hidden" name="date_time_borrow" value="<?php echo $row['date_time_borrow'];?>">
                        <input type="hidden" name="date_return" value="<?php echo $row['date_return'];?>">

                          <td><?php echo $row['trans_id'];?></td>
                          <td><?php echo $row['fname'];?>&nbsp<?php echo $row['lname'];?> </td>
                          <td><?php echo $row['barangay'];?></td>
                          <td> <?php echo $row['item'];?>&nbsp<strong>(<?php echo $row['quantity'];?>)<strong> </td>
                          <td> <?php echo $row['date_time_borrow'];?> </td>
                          <td> <?php echo $row['date_return'];?> </td>
                          <td> <?php echo $row['status'];?> </td>

                      </tr>
                      <?php };?>



</form>

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

 $sql1 = "INSERT INTO borrow(trans_id,fname,lname,barangay,item,quantity,date_time_borrow,date_return)
 VALUES('$trans_id','$fname','$lname','$barangay','$item','$quantity',Now(),'$date_return')";

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

                        <?php require 'footer.php'; ?>
