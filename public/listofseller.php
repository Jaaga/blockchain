<?php
include('../model/seller.php');
$result= listofseller();
?>
<!DOCTYPE html>
<!-- saved from url=(0042)http://getbootstrap.com/examples/carousel/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signup User</title>

    <!-- Bootstrap core CSS -->
    
    <link href="../dist/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../dist/bootstrap/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="../dist/bootstrap/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="../dist/bootstrap/js/bootstrap.min.js"></script>   
    <!-- Custom styles for this template -->
    <link href="../dist/bootstrap/css/carousel.css" rel="stylesheet">
  <style id="holderjs-style" type="text/css"></style>
  <style type="text/css">
  
h2{
  border:2px solid;
  border-radius:25px;
  font:400 25px/1.5 'Droid Serif';
  color: #FF6600;
  text-align: center;
}
.panel-title:hover {
     cursor: pointer;
}
p,h3{
  color: #FF6600;
}
</style></head>
<!-- NAVBAR
================================================== -->
  <body>
          <!--Header -->
          <div id="header"></div><br><br><br><br>
<div class="container">
	<div class="row">
	      <div class="row">
			<div class="col-lg-4">Seller's Name</div>
			<div class="col-lg-4">Selling Amount</div>
		</div>
		<?php foreach ($result as $value) { ?>

		<div class="row">
			<div class="col-lg-4">
			<?php echo $value['seller_name']; ?>
			</div>
			<div class="col-lg-4">
			 <?php echo $value['amount_btc']."BTC"; ?>	
			</div>
		</div>

	<?php	} ?>
	</div>
</div>

                 <hr>

      <!-- FOOTER -->
  <div id="footer"></div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../dist/bootstrap/js/jquery.min.js"></script>
    <script src="../dist/bootstrap/js/bootstrap.min.js"></script>
    <script src="../dist/bootstrap/js/docs.min.js"></script>
    <script> 
  $("#header").load("header.php");
  $("#footer").load("footer.php");  
   </script>

 </body>
</html>