<?php
	include_once("database.php");
	//get the data from the FORM
	
	//add to the database
	$query="Select * from tblstudent_email_and_single_sign_on";
	
	//run the query
	$result=mysqli_query($link,$query);
	$login = false;
	
	/*
	apply md5 hash key
	$pass = md5($password);
	
	using crypt
	$key ="whatEverIwant";
	$password=crypt($password,$key);
	*/
	
	/*
	checking login by query
	$query = "select * from customer where email='$email' and password='$password'"
	$result = mysqli_query($link,$query) or die ("Invalid user or password")
	
	
	
	
	while ($row = mysqli_fetch_row($result)){
			if ($row[5]==$user){
				if ($row[4]==$password){
					$login=true;
					
					//save temporary data 
					session_start();
					
					unset($_SESSION['id']);
					unset($_SESSION['fName']);
					unset($_SESSION['lName']);
					unset($_SESSION['phone']);
					unset($_SESSION['email']);
					unset($_SESSION['password']);
					unset($_SESSION['isAdmin']);
					
					$_SESSION['id']=$row[0];
					$_SESSION['fName']=$row[1];
					$_SESSION['lName']=$row[2];
					$_SESSION['phone']=$row[3];
					$_SESSION['email']=$row[4];
					$_SESSION['password']=$row[5];
					$_SESSION['isAdmin']=$row[6];
					break;
				}
			}
	}
	if (!($login)) {
		echo "<head>";
		echo "<meta http-equiv=\"refresh\" content=\"2; URL=login.html\"/>";
		echo "</head>";
		echo "<body>";
		echo "<h3>LogIn Fail</h3>";
		echo "<h3>Coming back to login page ...</h3>";
		echo "</body>";
	} else {
		if ($_SESSION['isAdmin'] == 0) {
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
	}
	*/

			echo "<head>";
			echo "<meta http-equiv=\"refresh\" content=\"1; URL=../register.php\"/>";
			echo "</head>";
			echo "<body>";
			echo "<h3>Welcome to IT Study</h3>";
			echo "</body>";
?>