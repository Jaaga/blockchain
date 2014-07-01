	<?php
	if(!function_exists('dbopen'))
	{
	    include ('dbcon.php');
	}

    function createBuyer($buyer_name,$email,$password)
    {
    	$db = dbopen();
    	$sql= "INSERT INTO buyer(buyer_name,email,btc_public_address)
    	values('$buyer_name','$email','$btc_public_address')";
    	if (!$db->query($sql)){
    		return ($db->error);
    	}

    }

    function loginBuyer($email,$password)
    {
    	$db=dbopen();
        $sql="SELECT * from buyer where email='$email' and password='$password'";
        $result = $db->query($sql);
        $row=mysqli_fetch_array($result);

        if (mysqli_num_rows($row)== 1)
            {
                header("location:../public/buyerdashboard.php");
            }
            else{
                header("location:../public/login.php");
                
            }
    }

    function buyerInfo($btc_public_address)
    {
        $db= dbopen();
        $updates = array();
        if (!empty($btc_public_address)){
            $updates[] = 'btc_public_address="'.$db->real_escape_string($btc_public_address).'"';}
        $updates = implode(', ', $updates);
             
        $sql="UPDATE buyer SET $updates where seller_id='$seller_id'";
                
        if(!$db->query($sql)){
            die('Error'.$db->error);
            }
        return true; 
    }

	?>