<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="shortcut icon" href="images/biglogo.png">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
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
                            <a href="logout.php" style="font-size: 10px; color:red; text-decoration:none;">
                                <i class="fas fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </nav>
                <div class="main-sidebar sidebar-style-2">
                    <aside id="sidebar-wrapper">
                        <div class="sidebar-brand">
                            <a href="inventory.php"> <img alt="image" src="images/msc_logo.png" width="60" class="header-logo" /> <span class="logo-name">MSCSUP</span>
                            </a>
                        </div>
                        <ul class="sidebar-menu">
                            <li class="menu-header"></li>
                            <li class="dropdown ">
                                <a href="inventory.php" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
                            </li>
                            <li class="dropdown">
                                <a href="index.php" class="nav-link"><i data-feather="cast"></i><span>Game Schedule</span></a>
                            </li>
                            <li class="dropdown">
                                <a href="registered.php" class="nav-link"><i data-feather="check-circle"></i><span>Registered</span></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Inventory</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="item_request.php">Item Request</a></li>
                                    <li><a class="nav-link" href="borrowed_item.php">Borrowed Item</a></li>
                                    <li><a class="nav-link" href="returned_item.php">Returned Item</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="announcement.php" class="nav-link"><i data-feather="align-justify"></i><span>Announcement</span></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="archive"></i><span>Archives</span></a>
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


            <div class="main-content" style="margin-left:-260px;font-family: Times New Roman;">
              <div class="section__content section__content--p30">
                  <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="overview-wrap" style="font-family:Times New Roman;">
                                <h2 class="title-1">Borrow Archives</h2>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-6 well"
                        style="margin-left:20px; background:white; border-radius:5px;width:75%; height: 50px;">
                        <form class="form-inline" method="POST" action="">
                            <label style="margin-left:10px; margin-top:-10px;">Date:</label>
                            <input style="margin-left:10px; margin-top:-10px; height:25px; font-size:10px;" type="date"
                                class="form-control" placeholder="Start" name="date1"
                                value="<?php echo isset($_POST['date1']) ? $_POST['date1'] : '' ?>" />
                            <label style="margin-left:10px; margin-top:-10px;">To</label>
                            <input style="margin-left:10px; margin-top:-10px; height:25px; font-size:10px;" type="date"
                                class="form-control" placeholder="End" name="date2"
                                value="<?php echo isset($_POST['date2']) ? $_POST['date2'] : '' ?>" />
                            <button style="margin-left:10px; margin-top:-6px; font-size:10px;" class="btn btn-primary"
                                name="search">Search</button> <a
                                style="margin-left:30px; margin-top:-36px; font-size:10px; margin-left:410px;" href="archives.php"
                                type="button" class="btn btn-success">Refresh</a>
                        </form>
                    </div>
    </div>
      <div class="row m-t-30">
      <div class="col-md-12">
          <!-- DATA TABLE-->
          <div class="table-responsive m-b-40">
              <table class="table table-borderless table-data3" style="font-family:Times New Roman;">
                                                          <thead>
                      <tr style="background-color:lightgray;">

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

<form action="#" method="POST" enctype="multipart/form-data">

<input type="hidden" name="trans_id" value="<?php echo $fetch['trans_id'];?>">
<input type="hidden" name="fname" value="<?php echo $fetch['fname'];?>">
<input type="hidden" name="lname" value="<?php echo $fetch['lname'];?>">
<input type="hidden" name="barangay" value="<?php echo $fetch['barangay'];?>">
<input type="hidden" name="item" value="<?php echo $fetch['item'];?>">
<input type="hidden" name="quantity" value="<?php echo $fetch['quantity'];?>">
<input type="hidden" name="date_time_borrow" value="<?php echo $fetch['date_time_borrow'];?>">
<input type="hidden" name="date_return" value="<?php echo $fetch['date_return'];?>">

  <td><?php echo $fetch['trans_id'];?></td>
  <td><?php echo $fetch['fname'];?>&nbsp<?php echo $fetch['lname'];?> </td>
  <td><?php echo $fetch['barangay'];?></td>
  <td> <?php echo $fetch['item'];?>&nbsp<strong>(<?php echo $fetch['quantity'];?>)<strong> </td>
  <td> <?php echo $fetch['date_time_borrow'];?> </td>
  <td> <?php echo $fetch['date_return'];?> </td>

  <td>

      <a name="submit" href="undo-itemrequest.php?id=<?php echo $fetch['trans_id']; ?> "type="submit" class="return_button2" title="Undo">Undo</a>
      <a name="submit"href="deletereq.php?id=<?php echo $fetch['trans_id']; ?> " type="submit" class="return_button1" title="Delete">Delete</a>

  </td>
</tr>
</form>

                                                
<?php
            }
        }else{
            echo'
            <tr>
                <td colspan = "4"><center>Record Not Found</center></td>
            </tr>';
        }
    }else{
        $query=mysqli_query($connection, "SELECT * FROM `Item_request` WHERE status = 'Unreturned Items'") or die(mysqli_error());
        while($fetch=mysqli_fetch_array($query)){
?>
                        <tr class="tr-shadow">

<form action="#" method="POST" enctype="multipart/form-data">

<input type="hidden" name="trans_id" value="<?php echo $fetch['trans_id'];?>">
<input type="hidden" name="fname" value="<?php echo $fetch['fname'];?>">
<input type="hidden" name="lname" value="<?php echo $fetch['lname'];?>">
<input type="hidden" name="barangay" value="<?php echo $fetch['barangay'];?>">
<input type="hidden" name="item" value="<?php echo $fetch['item'];?>">
<input type="hidden" name="quantity" value="<?php echo $fetch['quantity'];?>">
<input type="hidden" name="date_time_borrow" value="<?php echo $fetch['date_time_borrow'];?>">
<input type="hidden" name="date_return" value="<?php echo $fetch['date_return'];?>">

  <td><?php echo $fetch['trans_id'];?></td>
  <td><?php echo $fetch['fname'];?>&nbsp<?php echo $fetch['lname'];?> </td>
  <td><?php echo $fetch['barangay'];?></td>
  <td> <?php echo $fetch['item'];?>&nbsp<strong>(<?php echo $fetch['quantity'];?>)<strong> </td>
  <td> <?php echo $fetch['date_time_borrow'];?> </td>
  <td> <?php echo $fetch['date_return'];?> </td>

  <td>

      <a name="submit" href="undo-itemrequest.php?id=<?php echo $fetch['trans_id']; ?> "type="submit" class="return_button2" title="Undo">Undo</a>
      <a name="submit"href="deletereq.php?id=<?php echo $fetch['trans_id']; ?> " type="submit" class="return_button1" title="Delete">Delete</a>

  </td>
</tr>
</form>

<?php
        }
    }
?>

<

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
