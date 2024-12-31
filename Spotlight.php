<?php


$server ="localhost";
$username="root";
$password="";
$dbname="contact";

$con=mysqli_connect($server,$username,$password,$dbname);

if(!$con){
    echo"not connected";
}
$name=$_POST['name'];
$email=$_POST['email'];   
$phone=$_POST['phone'];
$Franchise=$_POST['Franchise'];
$message=$_POST['message'];
$type=$_POST['type'];


if($name =="")
{
    echo "<script>
    alert('Please Enter your name');
    window.location.href = 'Spotlight.html';
</script>";
    exit();
}
if($email ==""){
    echo "<script>
    alert('Please Enter your email address');
    window.location.href = 'Spotlight.html';
</script>";
    exit();
}
if($phone ==""){
    echo "<script>
    alert('Please Enter your Phone number');
    window.location.href = 'Spotlight.html';
</script>";
    exit();
}
if($Franchise ==""){
    echo "<script>
    alert('Please Enter your Franchise name');
    window.location.href = 'Spotlight.html';
</script>";
    exit();
}

 
$sql="INSERT INTO `spotlight_db`(`Name`, `Email`, `Phone`, `Franchise`, `Message`, `ad type`) 
VALUES ('$name','$email','$phone','$Franchise','$message','$type')";

$result=mysqli_query($con,$sql);
if($result){
    echo "<script>
alert('Thank you for your intrest  $name.Will connect you accordingly!');
window.location.href = 'Spotlight.html';
</script>";
exit(); 
}
else{
    echo "<script>
    alert('Contact Fail');
    </script>";
}

?>
