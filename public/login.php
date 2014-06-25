<!DOCTYPE html>
<!-- saved from url=(0042)http://getbootstrap.com/examples/carousel/ -->
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Blockchain</title>
      
    <!-- Bootstrap core CSS -->
    
    <link href="../dist/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../dist/bootstrap/css/bootstrap.min.css">
    <!--Font_Awesome -->
    <link rel="stylesheet" type="text/css" href="./dist/font_awesome/css/font-awesome.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="../dist/bootstrap/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="../dist/bootstrap/js/bootstrap.min.js"></script>  
</head>
<body>
<?php include 'header.php'; ?>



<br><br><br>
   <div class="container">
   <div class="row">
   <div class="col-lg-3"></div>
   <div class="col-lg-6">
   <div class="well">
   <div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="true" data-auto-logout-link="true"></div>
<a href="logout.php" class="btn btn-danger">logout</a>
   <form class="form-horizontal" method="post" action="../controller/checklogin.php">
<fieldset>

<!-- Form Name -->
<legend>Login</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">E-mail:</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="email" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password:</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="password" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
  <div class="col-md-4">
    <input type="submit" class="btn btn-success">
  </div>
</div>

</fieldset>
</form>
</div>
</div>
</div>
</div>
    </body>
    <?php include 'footer.php' ?>
</html>