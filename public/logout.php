
<!Doctype html>
<body>
	<script>
FB.logout(function(response) {
  // user is now logged out
});
	</script>
	<?php
     header("location:../public/login.php");
	 ?>

</body>
</html