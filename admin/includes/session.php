<?php
require("db_connection.php");

session_start();
$user_check = $_SESSION['login_user'];
$query= "SELECT * FROM admin WHERE Username= '$user_check'";
    $result = $db->query($query);
    while($data = $result->fetch_object()){
    	$login_session = $data->Username;
    }
if(!isset($login_session)){
    $db->close();
    header("location: ../index.php");
}
?>
