<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--<meta http-equiv="refresh" content="1" />-->
    <title>Vendo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/product_css.css">
    <script type="text/javascript" src="jQuery/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/sweetalert.js"></script>
  </head>
  <body>
    <!--Start of Main Header-->
    <div class="container-fluid bg-success mb-2">
      <div class="row">
        <div class="col-md-6 bg-danger p-3">
            <h1>This is the first column</h1>
        </div>
        <div class="col-md-6 bg-warning p-3">
            <h1>This is the second column</h1>
        </div>
      </div>
    </div>
    <!--End of Main Header-->
    <!--Start of Tab Navigation-->
    <nav>
      <div class="nav nav-tabs nav-justified" id="navTab" role="tablist">
        <a class="nav-item nav-link active" id="home-tab" data-toggle="tab" href="index.php" role="tab" aria-controls="first-tab" aria-selected="true"><strong>Tab 1</strong></a>
        <a class="nav-item nav-link" id="home-tab" data-toggle="tab" href="index2.php" role="tab" aria-controls="second-tab" aria-selected="true"><strong>Tab 2</strong></a>
      </div>
    </nav>
    <!--End of Tab Navigation-->
    <!--Start of Tab Contents-->
    <div class="tab-content" id="myTabContent">
      <!--Start of First Row Container-->
      <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
        <div class="container-fluid mt-3">
          <!--Start of First Row-->
          <div class="row ml-5">
            <!--Start of First Column-->
            <!--Insert PHP Here-->
            <?php

             $conn=mysqli_connect("localhost","root","","snack_vendo");
             $result = mysqli_query($conn, "SELECT * FROM `product` limit 5 offset 5");
             while($row = mysqli_fetch_array($result)){

            ?>

            <div class="col-sm-2 mr-4" style="margin-top:5%;">
                <div class="row">
                  <div class="col-sm-12 p-1 m-1 mt-1">
                    <!--Insert DB Image Here-->
                    <?php echo '<center><img src="data:image/jpeg;base64,'.base64_encode( $row['product_image'] ).'" height="150" width="150" alt="Item"/>'; ?>
                      <h5 class="text-lg-center text-nowrap"><?php echo $row['product_name']; ?></h5>
                      <h5 class="text-lg-center text-nowrap">Price: &#8369;<?php echo $row['selling_price']; ?>.00</h5>

                  </div>
                </div>
                <form action="index.php" method="POST">
                                    <input type="hidden" name="product_id" value="<?php echo $row['product_id'];?>">
                                    <input type="hidden" name="selling_price" value="<?php echo $row['selling_price'];?>">
                <div class="row mt-3">
                  <div class="col-sm-12 mb-1">

                    <button type="submit" class="btn btn-lg btn-success btn-block" name="buy">Buy</button><br>
                  </div>
                </div>
                      </form>
            </div>

	  <?php } ?>

      </div>
      <?php

      $conn=mysqli_connect("localhost","root","","snack_vendo");

      if (isset($_POST['buy'])) {

      $product_id=$_POST['product_id'];
      $selling_price=$_POST['selling_price'];

        $sql = "INSERT INTO purchased(product_id,sales,date_time)VALUES('$product_id','$selling_price',now())";
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

      if(!$result){
        echo '<script>alert("Cancel transaction");</script>';

      }
      else{
        echo '<script>alert("Thanks for buying");</script>';

      }
      }



      ?>

    </div>
  </div>
      <!--End of First Row Container-->








      </div>
      <!--End of First Row-->
      <!--Start of Second Row-->


      </div>
    </div>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">SLot 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="index.php" method="POST">
          <div class="col-md-5 p-1">
            <img src="download.jpg" alt="Snack" height="250" width="210">
          </div>
          <div class="row">
            <div class="col-md-12">
              <h3><label name="product_name"><?php echo $row['product_name']?></label></h3>
              <h4>Price: <?php echo '20'; ?></h4>
              <h4>Quantity: <?php echo '10'; ?></h4>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-lg btn-success" name="buy">Confirm</button>
            <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Cancel</button>
          </div>
        </form>

      </div>



    </div>
  </div>
</div>
</div>

  </body>
</html>
