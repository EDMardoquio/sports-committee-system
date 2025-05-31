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
    <title>Dashboard</title>


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
				          <?php
          include 'connection/db_connection.php';
            $product_no = "";
            if (isset($_GET['sports_code'])) {
              $sports_code = $_GET['sports_code'];
              $result = mysqli_query($connection, "SELECT * FROM `sports` WHERE `sports_code` = '$sports_code'");
              if($row = mysqli_fetch_array($result)){
           ?>
				
				
				

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Update</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form method="POST" enctype="multipart/form-data" class="form-horizontal">
										<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Sports Code</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="sports_code" value="<?php echo $row['sports_code']?>" class="form-control" disabled>
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Sports</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                        <select name="sports" id="sports" class="form-control" >
                                                        <option value="<?php echo $row['title']?>"><?php echo $row['title']?></option>
                                                        <option value="Basketball">Basketball</option>
                                                        <option value="Volleyball">Volleyball</option>
                                                        <option value="Badminton">Badminton</option>
														<option value="Tennis">Table Tennis</option>
														<option value="Chess">Chess</option>

                                                    </select>
                                                    
                                                </div>
                                            </div>
											    <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="description" value="<?php echo $row['description']?>" class="form-control" required>
                                                    
                                                </div>
												</div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Start Date</label>
                                                </div>
												    <div class="col-12 col-md-9">
                                                    <input type="date" name="start_date" value="<?php echo $row['start_date']?>" class="form-control" required>
                                                    
                                                </div>

                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Start Time</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="time" name="start_time" value="<?php echo $row['start_time']?>" class="form-control" required>
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">End Time</label>
                                                </div>
												 <div class="col-12 col-md-9">
                                                    <input type="time" name="time" value="<?php echo $row['time']?>" class="form-control" required>
                                                    
                                                </div>
                                                  </div>
											<div class="card-footer">
											
                                        <button type="submit" name="update" class="btn btn-success btn-sm" >
                                            <i class="fa fa-dot-circle-o">Update</i> 
                                        </button>

															
                                    </div>


											</form>
											<?php }} ?>
                                    </div>
                                   
                                </div>				
				          <?php

            if (isset($_POST['update'])) {
				
              $sports = $_POST['sports'];
              $description = $_POST['description'];
             $start_date = $_POST['start_date'];
			 $end_date = $_POST['start_time'];
			 $time = $_POST['time'];
			 $place = "index.php"; 
			 
                $sql = "UPDATE `sports` SET `title` = '$sports' ,`description` = '$description' ,`start_date` = '$start_date',`start_time` = '$end_date',`time` = '$time' WHERE `sports_code` = '$sports_code'";
                $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
                if (!$result) {
                  echo '<script>alert("Something Went Wrong");</script>';
                }
                else {
					
                  echo '<script>alert("Successfully Updated");</script>';
				  echo '<script>self.location="'.$place.'";</script>';
				 
				 
                }
           
              
            }
           ?>
						   

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
