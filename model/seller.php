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

    function listofseller()
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

?>