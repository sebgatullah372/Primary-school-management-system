<?php
session_start();
$error= "";
if(isset($_POST['submit'])){
   if(empty($_POST['username']) || empty($_POST['password'])){
        $error= "Invalid username or password";  
}else{
	$username= $_POST['username'];
	$password= $_POST['password'];
	$username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);
    require('db_connection.php');
    $query= "SELECT * FROM admin WHERE Username= '$username' AND password= '$password'";
    $result = $db->query($query);

    $rows= $result->num_rows;
    
    if($rows ==1 ){
    	$_SESSION['login_user'] = $username;
    	header("location: ../dashboard.php");

    }else{
        $error = "Invalid username or password";
        $db->close();
        
    }


}
}
?>
