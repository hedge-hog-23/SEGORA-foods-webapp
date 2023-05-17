<?php

$showAlert = false;
$showError = false;
$exists=false;
	
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	// Include file which makes the
	// Database Connection.
	include 'conn.php';
	
	$username = $_POST["username"];
    $email = $_POST["email"];
	$password = $_POST["password"];
	$cpassword = $_POST["cpassword"];
	
			
	
	$sql = "Select * from users where username='$username'";
	
	$result = mysqli_query($conn, $sql);
	
	$num = mysqli_num_rows($result);
	
	// This sql query is use to check if
	// the username is already present
	// or not in our Database
	if($num == 0) {
		if(($password == $cpassword) && $exists==false) {
	
			
				
			
			$sql = "INSERT INTO users (USERNAME,PASSWORD,email) VALUES('$username','$password','$email')";
	
			$result = mysqli_query($conn, $sql);
	
			if ($result) {
				$showAlert = true;
			}
		}

	}// end if
	
if($num>0)
{
	$exists="Username not available";
}

}//end if
	
?>
<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">   
       <!-- Bootstrap CSS --> 
	   
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity=
"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
        crossorigin="anonymous">  
</head>    
<body>  
    <?php
	
	if($showAlert) {
	
		echo ' <div class="alert alert-success
			alert-dismissible fade show" role="alert">
	
			<strong>Success!</strong> Your account is
			now created and you can login.
			<button type="button" class="close"
				data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true"></span>
			</button>
		</div> ';
	}
	
	if($showError) {
	
		echo ' <div class="alert alert-danger
			alert-dismissible fade show" role="alert">
		<strong>Error!</strong> '. $showError.'
	
	<button type="button" class="close"
			data-dismiss="alert aria-label="Close">
			<span aria-hidden="true"></span>
	</button>
	</div> ';
}
		
	if($exists) {
		echo ' <div class="alert alert-danger
			alert-dismissible fade show" role="alert">
	
		<strong>Error!</strong> '. $exists.'
		<button type="button" class="close"
			data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
	</div> ';
	}

?>

    
    
    <div class="container my-4 ">
    
    <h1 class="text-center">Signup Here</h1> 
    <form action="signup.php" method="post">
    
        <div class="form-group"> 
            <label for="username">Username</label> 
        <input type="text" class="form-control" id="username"
            name="username" aria-describedby="emailHelp">    
        </div>
    
        <div class="form-group"> 
            <label for="password">Password</label> 
            <input type="password" class="form-control"
            id="password" name="password"> 
        </div>
		<div class="form-group"> 
            <label for="cpassword">confirm Password</label> 
            <input type="password" class="form-control"
            id="cpassword" name="cpassword"> 
        </div>
    
          
		<div class="form-group"1> 
            <label for="email">email</label> 
            <input type="varchar" class="form-control"
                id="email" name="email" required>
    
         
        </div> 
    
        <button type="submit" class="btn btn-primary">
        SignUp
        </button> 
		
		<a href = "userlogin.php"><button class="btn" style =  "float:right">
        login</a>
        </button> 
    </form> 
    
</div>    
</body>    
</html>     