<?php 
session_start();
include_once "config.php";

$matched_id=$_POST['match'];
$person_id=$_SESSION['unique_id'];
//var_dump($matched_id);
$sql3 = mysqli_query($conn, "SELECT * FROM matching WHERE person_id ='{$person_id}' AND matched_person_id ='{$matched_id}'");
//var_dump($sql3);
if( mysqli_num_rows($sql3) === 0) {
    
    $sql2 = mysqli_query($conn, "INSERT INTO matching (person_id, matched_person_id) VALUES ({$person_id}, '{$matched_id}')");
}
?>