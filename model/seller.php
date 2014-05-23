<?php
   if(!function_exists('dbopen')){
        include ('dbcon.php');
    }

    function createSeller($name,$email,$paypalid,$password,$sell_amount_btc,
    	$btc_public_address)
    {
    		$db=dbopen();
    		$sql="INSERT INTO seller(seller_id,seller_name,email,
    			paypal_email,amount_btc,btc_public_address)
                values(UUID(),'$name','$email','$paypalid',
                	'$sell_amount_btc','$btc_public_address')";
            if(!$db->query($sql)){
            	return ($db->error);
            }


    }

    function listofseller()
    {
    	$db=dbopen();
    	$sql="SELECT * from seller";
    	$result=$db->query($sql);
    	return ($result);

    }

?>