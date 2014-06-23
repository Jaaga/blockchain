    <?php
       if(!function_exists('dbopen')){
            include ('dbcon.php');
        }

        function createSeller($seller_name,$email,$password)
        {
        		$db=dbopen();
        		$sql="INSERT INTO seller(seller_name,email,password)
                    values('$seller_name','$email','$password')";
                if(!$db->query($sql)){
                	return ($db->error);
                }


        }

        function listofSeller()
        {
        	$db=dbopen();
        	$sql="SELECT * from seller";
        	$result=$db->query($sql);
        	return ($result);

        }

        function loginSeller($email,$password){
            $db=dbopen();
            $sql="SELECT * from seller where email='$email' and password='$password'";
            $result = $db->query($sql);
            $row=mysqli_fetch_array($result);

            if (mysqli_num_rows($row)== 1)
            {
                header("location:../public/listofseller.php");
            }
            else{
                header("location:../public/login.php");
                
            }
        }
        function sellerInfo($seller_id,$paypalId,$sell_amount_btc,$rate_per_BTC,$deadline_for_sell){
            $db = dbopen();
            
            $updates = array();
            if (!empty($paypalId)){
            $updates[] = 'paypal_id="'.$db->real_escape_string($paypalId).'"';}
            if (!empty($sell_amount_btc)){
            $updates[] = 'sell_amount_btc="'.$db->real_escape_string($sell_amount_btc).'"';}
            if (!empty($rate_per_BTC)){
            $updates[] = 'rate_per_BTC="'.$db->real_escape_string($rate_per_BTC).'"';}
            if (!empty($deadline_for_sell)){
             $updates[] = 'deadline_for_sell="'.$db->real_escape_string($deadline_for_sell).'"';}
            
             $updates = implode(', ', $updates);
             
             $sql="UPDATE seller SET $updates where seller_id='$seller_id'";
                
                if(!$db->query($sql)){
                    die('Error'.$db->error);
                }
               return true;
            }

    ?>