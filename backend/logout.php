<?php
session_start();
include_once "config.php";
$status = "Offline now";  
$sql = mysqli_query($conn, "UPDATE users SET status='{$status}' WHERE unique_id = '{$_SESSION['unique_id']}'");
unset($_SESSION['unique_id']);
unset($_SESSION['rows']);
header('Location: ../index.php');

?>