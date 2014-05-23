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
          <div id="header"></div>
          <br><br>
    <div class="container">   
  <div class="row-fluid">
   
  <div class="col-lg-3"></div>

  <div class="col-lg-6">
  <div class="headline"><h2>Create A New Account or Login</h2></div>
  <div class="well"> 
    
  <!-- 1st main heading -->          
   <!--  <div class="row"> -->
    <!-- <div class="col-lg-4"> -->
      <h3>Buyer's Account</h3>
     <!-- <div class="col-lg-8">
      <button id="collapse-init" class="btn btn-success pull-right">
    <!-- Make A button here if Want to Show all collapsable Item
</button></div>
</div> -->
<div class="panel-group" id="accordion">
    <!-- First Panel -->
    <div class="panel panel-default">
        <div class="panel-heading">
             <h4 class="panel-title"
                 data-toggle="collapse" 
                 data-target="#collapse1">
                 create a buyer account
             </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse">
            <div class="panel-body">
               
          <form class="form-horizontal" method="post" action="../controller/createseller.php">
<fieldset>

<!-- Form Name -->
<legend align="center">Signup</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-6">
  <input id="name" name="name" type="text" placeholder="Enter Your Name" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-6">
  <input id="email" name="email" type="text" placeholder="Enter your Email Id" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="paypal">Paypal Id</label>  
  <div class="col-md-6">
  <input id="paypal" name="paypal" type="text" placeholder="Enter Paypal Id" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="amount_btc">Selling Amount</label>  
  <div class="col-md-6">
  <input id="amount_btc" name="amount_btc" type="text" placeholder="In BTC" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="public_address">BTC Address</label>  
  <div class="col-md-6">
  <input id="public_address" name="public_address" type="text" placeholder="Public Address for BTC" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-6">
    <input id="password" name="password" type="password" placeholder="Enter Password" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password2">Confirm Password</label>
  <div class="col-md-6">
    <input id="password2" name="password2" type="password" placeholder="Confirm Password" class="form-control input-md">
    
  </div>
</div>
 <!-- Button -->
 
 
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-6">
  <div class="row">
  <div class="col-lg-4">
    <input type="submit" id="submit" name="submit" class="btn btn-primary">
    </div>
    <div class="col-lg-4">
    <a href="index.php" class="btn btn-default">Cancle</a>
    </div>
    </div>
  </div>
</div>

</fieldset>
</form>
            </div>
        </div>
    </div>
    
    <h3>Seller's Account</h3></div>
    <div class="panel-group" id="accordion">
    <!-- Second Panel -->
    <div class="panel panel-default">
        <div class="panel-heading">
             <h4 class="panel-title" 
                 data-toggle="collapse" 
                 data-target="#collapse2">
                 create a seller acoount
             </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">
               <form class="form-horizontal" method="post" action="../controller/createseller.php">
<fieldset>

<!-- Form Name -->
<legend align="center">Signup</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-6">
  <input id="name" name="name" type="text" placeholder="Enter Your Name" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-6">
  <input id="email" name="email" type="text" placeholder="Enter your Email Id" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="paypal">Paypal Id</label>  
  <div class="col-md-6">
  <input id="paypalid" name="paypalid" type="text" placeholder="Enter Paypal Id" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="amount_btc">Selling Amount</label>  
  <div class="col-md-6">
  <input id="amount_btc" name="amount_btc" type="text" placeholder="In BTC" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="public_address">BTC Address</label>  
  <div class="col-md-6">
  <input id="public_address" name="public_address" type="text" placeholder="Public Address for BTC" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-6">
    <input id="password" name="password" type="password" placeholder="Enter Password" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password2">Confirm Password</label>
  <div class="col-md-6">
    <input id="password2" name="password2" type="password" placeholder="Confirm Password" class="form-control input-md">
    
  </div>
</div>
 <!-- Button -->
 
 
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-6">
  <div class="row">
  <div class="col-lg-4">
    <input type="submit" id="submit" name="submit" class="btn btn-primary">
    </div>
    <div class="col-lg-4">
    <a href="index.php" class="btn btn-default">Cancle</a>
    </div>
    </div>
  </div>
</div>

</fieldset>
</form>
            </div>
        </div>
    </div>

    </div> <!-- end well -->
    </div>
</div>
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
<script type="text/javascript">
  $(function () {

    var active = true;

    $('#collapse-init').click(function () {
        if (active) {
            active = false;
            $('.panel-collapse').collapse('show');
            $('.panel-title').attr('data-toggle', '');
            
        } else {
            active = true;
            $('.panel-collapse').collapse('hide');
            $('.panel-title').attr('data-toggle', 'collapse');
            
        }
    });
    
    $('#accordion').on('show.bs.collapse', function () {
        if (active) $('#accordion .in').collapse('hide');
    });


});
</script>
  
</body></html>