<?php
 $url ='http://blockchain.info/ticker';
 $content = file_get_contents($url,0,null,null);
        $output =json_decode($content,true);
   ?>
<!DOCTYPE html>
<html>

  <head>
    
    
    <link rel="stylesheet" href="dist/css/bootstrap.css">
    <link rel="stylesheet" href="main.css">
    
  </head>

  <body>
  <div class="jumbotron">
      <div class="container">
        <h1>What is Bitcoin</h1>
        <p> A digital currency in which transactions can be performed without the need for a central bank..</p>
        <a href="#">Learn More</a>
      </div>
    </div> 
    <div class="container">
    <div class="row">
    	<div class="col-md-4"><h5>Currency</h5></div>
    	<div class="col-md-4"><h5>Buy</h5></div>
    	<div class="col-md-4"><h5>Sell</h5></div>
    </div>
<?php 
	foreach ($output as $value => $val) { ?>
	<div class="row">
	<div class="col-md-4">
	<h5><?php echo $value; ?></h5></div>
	<div class="col-md-4">
	<h5><?php	echo $val['buy']." ".$val['symbol']; ?></h5></div>
	<div class="col-md-4">
	<h5><?php	echo $val['sell']." ".$val['symbol']; ?></h5></div>
</div>
<?php	
}
	?>
</div>
    <div class="footer">
       <div class="container">
       <p> </p>
       </div></div>   
  </body>
</html>
