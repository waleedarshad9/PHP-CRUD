<?php
require_once('connect.php');
$id = $_GET['id'];

$res = mysqli_query($connection, "delete from crud where id='$id'");

if($res){
    header('location: view.php');
}else{
    echo "Failed to delete";
}
?>