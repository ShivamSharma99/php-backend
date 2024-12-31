<?php
require 'config.php';

if (!empty($_SESSION["id"])) {
    $id=$_SESSION["id"];
    $result=mysqli_query($conn, "SELECT * FROM registration WHERE id='$id'");
    $row=mysqli_fetch_assoc($result);
}
else{
    header("location: login.html");
}
?>
