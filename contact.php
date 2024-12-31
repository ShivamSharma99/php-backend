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
$subject=$_POST['text'];
$message=$_POST['message'];


if($name =="")
{
    echo "<script>
    alert('Please Enter your name');
    window.location.href = 'contact.html';
</script>";
    exit();
}
if($email ==""){
    echo "<script>
    alert('Please Enter your email address');
    window.location.href = 'contact.html';
</script>";
    exit();
}
if($subject=""){
    echo "<script>
    alert('Please Enter subject');
    window.location.href = 'contact.html';
</script>";
    exit();
}
$sql="INSERT INTO `contact_db`(`Name`, `Email`, `Subject`, `Message`) 
VALUES ('$name','$email','$subject','$message')";

$result=mysqli_query($con,$sql);
if($result){
    echo "<script>
alert('Thank you for contacting $name. We look forward to assisting you!');
window.location.href = 'contact.html';
</script>";
exit(); 
}
else{
    echo "<script>
    alert('Contact Fail');
    </script>";
}

?>
