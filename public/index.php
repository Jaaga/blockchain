<!DOCTYPE html>
<!-- saved from url=(0042)http://getbootstrap.com/examples/carousel/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>BlockChain</title>
      
    <!-- Bootstrap core CSS -->
    
    <link href="../dist/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../dist/bootstrap/css/bootstrap.min.css">
    <!--Font_Awesome -->
    <link rel="stylesheet" type="text/css" href="./dist/font_awesome/css/font-awesome.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="../dist/bootstrap/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="../dist/bootstrap/js/bootstrap.min.js"></script>   
    <!-- Custom styles for this template -->
    <link href="../dist/bootstrap/css/main.css" rel="stylesheet">
    <link href="../dist/bootstrap/css/carousel.css" rel="stylesheet">
    
  <style id="holderjs-style" type="text/css"></style>
  <style type="text/css">
  
  @font-face{
  font-family:'Archistico_Bold'; 
      src: url('../dist/bootstrap/fonts/Archistico_Bold.ttf');
}

  
</style></head>
<!-- NAVBAR
================================================== -->
  <body>
          <div id="header"></div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="../dist/images/bit1.png">
          <div class="container">
            <div class="carousel-caption" >
          <!-- Place to write Content on top of Slider -->
              <!-- -->
             
            </div>
          </div>
        </div>
        <div class="item">
          <img src="../dist/images/b2.jpg">
          <div class="container">
            <div class="carousel-caption">
             <p>jhi</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="../dist/images/bit3.png">
          <div class="container">
            <div class="carousel-caption">
              
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
        <div class="well" >
          <img class="img-circle" src="../dist/images/exchange.png" >
          <a href="exchange.php" ><h2>See Exchange Rates</h2></a>
          
        </div>
       </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
        <div class="well" >
          <img class="img-circle" src="../dist/images/sell.png" >
          <a href="listofseller.php" ><h2>Seller</h2></a>
          
        </div>
       </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
        <div class="well" >
          <img class="img-circle" src="../dist/images/buy2.png">
         <a href="buyer.php" > <h2>Buyer</h2></a>
          
          
        </div>
        </div>
        <!-- /.col-lg-4 -->
      </div><!-- /.row -->
      </div>


      <!-- START THE FEATURETTES -->

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
  
</body></html>