<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--<meta http-equiv="refresh" content="1" />-->
    <title>Vendo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="jQuery/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/sweetalert.js"></script>
  </head>

  <body>
    <!--Start of Main Header-->


  <?php

   $conn=mysqli_connect("localhost","root","","snack_vendo");
   $result = mysqli_query($conn, "SELECT * FROM `product`");
   while($row = mysqli_fetch_array($result)){

  ?>


          <?php echo '<center><img src="data:image/jpeg;base64,'.base64_encode( $row['product_image'] ).'" height="150" width="150" alt="Item"/>'; ?>

          <!--Insert DB Product ID-->
            <form method="post" action="sample.php">
          <input type="hidden" name="purchased_no"><br>
          <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>"><br>
          <h5 class="text-lg-center text-nowrap"><center><?php echo $row['product_name'] ?></h5>



          <h5 class="text-lg-center text-nowrap">Price: &#8369;<?php echo $row['selling_price']; ?>.00</h5>
          <button type="submit"  name="buy" class="btn btn-lg btn-success btn-block">Buy</button><br>
    </form>

<?php }?>

            <div>



<?php

$conn=mysqli_connect("localhost","root","","snack_vendo");

if (isset($_POST['buy'])) {

$purchased_no=$_POST['purchased_no'];
$product_id=$_POST['product_id'];

  $sql = "INSERT INTO purchased(purchased_no,product_id,date)VALUES('$purchased_no','$product_id')"
      . "SELECT product_id"
      . "FROM product";
      $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
echo $result;

if($result){
  echo '<script>alert("Product Saved");</script>';

}
else {
  echo '<script>alert("Pr Saved");</script>';
}
}



?>

  </body>
</html>
