

<?php
$HOST ="localhost";
$USER="root";
$PASS="";
$DB="ecommerce1";

   $conn = mysqli_connect($HOST,$USER,$PASS,$DB);
if(!$conn){
	
	echo "database connected error!";
}
if(!empty($_POST)){
	$vname=$_POST['name'];
	$vemail=$_POST['email'];
	$vphone=$_POST['phone'];
	$vadd=$_POST['address'];
	
	
	$ripun="INSERT INTO form (id,name,email,phone,address) VALUES('','$vname','$vemail','$vphone','$vadd')";
	
	if(mysqli_query($conn,$ripun)){
		
		echo "done" ;
	}	
}


?>
<!DOCTYPE HTML>
<html>  
<head>

<link rel="stylesheet" type="text/css" href="stylesheet.css">
<style>


</style> 
</head>
<body>


<div clas s="contact-title">

<h1>say hellow </h1>

<h2>we are alwayes ready to server you </h2>
</div>

<div>
<form id="contact-form" action="" method="post" align="center">
<input class="form-control" type="text" name="name" placeholder="Enter your name" required ><br>

 <input class="form-control"  type="text" name="email" placeholder="Enter your email" required><br>
 
<input class="form-control"  type="text" name="phone" placeholder="Enter your phone" required><br>

<input class="form-control"  type="text" name="address" placeholder="Enter your address" required><br>

<input type="submit" class="form- control-submit" value="send-message">
</form>
</div>
</body>
</html>
