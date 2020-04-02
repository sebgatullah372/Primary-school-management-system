<?php
include './includes/db_connection.php';
$flag=0;
if(isset($_POST['delete'])){

$flag++;
}

if(isset($_GET['serial'])){
$serial=(int)$_GET['serial'];


}
?>