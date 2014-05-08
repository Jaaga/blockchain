<?php
 $url ='http://blockchain.info/ticker';
 $content = file_get_contents($url,0,null,null);
        $output =json_decode($content,true);
      
 ?>

<!DOCTYPE html>
<html lang="en" lang="en">
<head>
<title>Block Chain</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body onload="new ElementMaxHeight();">

<!-- header -->
	<div id="header">
		<div class="container">
<!-- .logo-box -->
			<div class="logo-box">
				<h1><a href="index.html"><strong>BITCOIN</strong> </a></h1>
				<h2>Trading Bitcoin</h2>
				<p>Its a best place to buy and sell bitcoin.</p>
				<a href="" class="button">Learn More</a>
			</div>
<!-- /.logo-box -->
			<img src="logo.png" alt="" width="140" height="140" class="png extra-img"/>
		</div>
	</div>
	<!-- advanced-content -->
	<div id="top-content">
		<div class="container">
                        
                        	  <?php 
	foreach ($output as $value => $val) { ?>
	<div class="row">
	<div class="col-md-4">
	<h5><?php echo $value; ?></h5></div>
	<div class="col-md-4">
	<h5><?php	echo $val['buy']; ?></h5></div>
	<div class="col-md-4">
	<h5><?php	echo $val['sell']; ?></h5></div>
	<div class="col-md-4">
	<h5><?php	echo $val['symbol']; ?></h5></div>
</div>
<?php	
}
	?>
                    
            

            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            
            
            
		</div>
	</div>


<!-- footer -->
	<div id="footer">
		<div class="container">
			<div class="inside">
				<div class="wrapper">
					
				</div>
			</div>
		</div>
	</div>

    
</body>
</html>
