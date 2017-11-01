<html>
<?php
	include_once("database.php");
	//get the data from the FORM
	$fName=$_POST['txtFName'];
	$lName=$_POST['txtLName'];
	$email=$_POST['txtEmail'];
	$phone=$_POST['txtPhone'];
	$password=$_POST['txtPassword'];
	if (isset($_POST['isAdmin'])) {
		$isAdmin = 1;
	} else {
		$isAdmin = 0;
	}
	
	
	
	//add to the database
	$query="Insert into customer(firstName,lastName,phoneNum,password,email,isAdmin) values ('$fName','$lName','$phone','$password','$email','$isAdmin')";
	
	//run the query
	$result=mysqli_query($link,$query);
	
	if ($isAdmin == 0) {
	echo "<head>";
	echo "<meta http-equiv=\"refresh\" content=\"2; URL=main.php\"/>";
	echo "</head>";
	echo "<body>";
	echo "<h3>Successful Sign Up</h3>";
	echo "<h3>Wellcome to Amazing sound, enjoy shopping ...</h3>";
	echo "</body>";	
	} else {
	echo "<head>";
	echo "<meta http-equiv=\"refresh\" content=\"2; URL=product/product.php\"/>";
	echo "</head>";
	echo "<body>";
	echo "<h3>You have signed in as Admin</h3>";
	echo "<h3>Activating Manager Mode ...</h3>";
	echo "</body>";
	}
?>
</html>
