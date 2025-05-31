
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <!--  <meta http-equiv="refresh" content="1" />-->
    <title>Vendo</title>
  <!--  <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/product_css.css">
    <script type="text/javascript" src="jQuery/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/sweetalert.js"></script>
  </head>

  <body class="animsition">
    <!--Start of Main Header-->
    <div class="container-fluid mb-2">
      <div class="row">
        <div class="col-md-6  p-3">
            <h1>This is the first column</h1>
        </div>
        <div class="col-md-6 p-3">
            <h1>This is the second column</h1>
        </div>
      </div>
    </div>
    <!--End of Main Header-->
    <!--Start of Tab Navigation-->
  <!--  <nav>
      <div class="nav nav-tabs nav-justified" id="navTab" role="tablist">
        <a class="nav-item nav-link active" id="home-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first-tab" aria-selected="true">Tab 1</a>
        <a class="nav-item nav-link" id="home-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second-tab" aria-selected="true">Tab 2</a>
      </div>
    </nav>-->
    <!--End of Tab Navigation-->
    <!--Start of Tab Contents-->
    <!--   <div style="color:black;font-family:arial;font-size:20px;"><span id="time">60</span> seconds</div>--->
    <a href="#" class="previous btn-lg">&laquo; Previous</a>
    <a href="#" class="next btn-lg" >    Next &raquo;</a>


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
             $result = mysqli_query($conn, "SELECT * FROM `product`");
             while($row = mysqli_fetch_array($result)){

            ?>

            <div class="col-sm-2 mr-4" style="margin-top:5%;">
                <div class="row">
                  <div class="col-sm-12 p-1 m-1 mt-1">
                    <!--Insert DB Image Here-->
                    <?php echo '<center><img src="data:image/jpeg;base64,'.base64_encode( $row['product_image'] ).'" height="150" width="150" alt="Item"/>'; ?>
      <span class="badge badge-warning">7</span>                     
					 <h6 class="text-lg-center text-nowrap"><?php echo $row['product_name']; ?></h6>
                      <h6 class="text-lg-center text-nowrap">Price: &#8369;<?php echo $row['selling_price']; ?>.00</h6>


                  </div>
                </div>
                <form action="index.php" method="POST">

                                    <input type="hidden" name="product_id" value="<?php echo $row['product_id'];?>">
                                    <input type="hidden" name="selling_price" value="<?php echo $row['selling_price'];?>">
                                    <h6 class="text-lg-center text-nowrap">Stocks:<input type="text" name="barcode" autofocus="autofocus" class="in" autocomplete="off"></h6>
                                    <h6 class="text-lg-center text-nowrap">barcode: <input type="hidden" name="barcode1"  value="<?php echo $row['barcode'];?>"></h6>



                <div class="row mt-3">
                  <div class="col-sm-12 mb-1">

                    <button type="submit" class="btn btn-lg btn-success btn-block" name="buy">Buy</button><br>
  
                  </div>
                </div>
                      </form>
            </div>

	  <?php } ?>

      </div>
      <!-- Display the countdown timer in an element -->

      <!-- Display the countdown timer in an element -->

      <script>

      function startTimer(duration, display) {
          var timer = duration, seconds;
          setInterval(function () {

              seconds = parseInt(timer % 60, 10);


              seconds = seconds < 10 ? "0" + seconds : seconds;

              display.textContent = seconds;

              if (--timer < 0) {
                  timer = duration;
              }
          }, 1000);
      }

      window.onload = function () {
          var oneS = 60 * 1,
              display = document.querySelector('#time');
          startTimer(oneS, display);
      };
      </script>

      <?php


      $conn=mysqli_connect("localhost","root","","snack_vendo");




      if (isset($_POST['buy'])) {


        $product_id=$_POST['product_id'];
        $selling_price=$_POST['selling_price'];
        $barcode= $_POST['barcode'];
        $barcode1= $_POST['barcode1'];

        if($barcode==$barcode1){

        }

        $sql = "INSERT INTO purchased(product_id,sales,date)VALUES('$product_id','$selling_price',now())";
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));


      if(!$result){
        echo '<script>function validation(){

        swal("Oops","Thanks","Error");

        }
</script>';

      }
      else{

        echo '<script>


          swal("Thanks for buying",{
          icon:"success",
          button:false,
          timer:3000,

        });


</script>';


      }

      }



      ?>




    </div>
  </div>





      <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
        <div class="container-fluid mt-3">
          <!--Start of First Row-->
          <div class="row ml-5" style="margin-top:5%;">
            <?php

             $conn=mysqli_connect("localhost","root","","snack_vendo");
             $result = mysqli_query($conn, "SELECT * FROM `product` limit 15 offset 15");
             while($row = mysqli_fetch_array($result)){

            ?>

            <div class="col-sm-2 mr-4">
			
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

                    <button type="submit" class="btn btn-lg btn-success btn-block" name="buy1">Buy</button><br>
                  </div>
                </div>
                      </form>
            </div>

	  <?php } ?>

      </div>

      <?php

      $conn=mysqli_connect("localhost","root","","snack_vendo");

      if (isset($_POST['buy1'])) {

      $product_id=$_POST['product_id'];
      $selling_price=$_POST['selling_price'];

        $sql = "INSERT INTO purchased(product_id,sales,date)VALUES('$product_id','$selling_price',now())";
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        if(!$result){
          echo '<script>function validation(){

          swal("Oops");

          }
  </script>';

        }
        else{
          echo '<script>
          function validation(){

          swal("Oops");

          }
  </script>';


        }
      }



      ?>

    </div>
  </div>



      </div>



<!--<script src="../vendor/animsition/animsition.min.js"></script>-->

  </body>
</html>
