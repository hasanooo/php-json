<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h1>log in</h1>
<?php
    
    
        if(isset($_REQUEST['submit'])){

         
        session_start();
        $_SESSION['uname'] = $_REQUEST['uname'];
        $_SESSION['password'] = $_REQUEST['password'];
        header('location: dashboard.php');
        
   }
   else{
        echo "Invalid!";
    }

    header('Location: Json.php');
		exit;

?>
</body>
</html>