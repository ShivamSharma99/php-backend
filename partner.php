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
$occupation=$_POST['occupation'];
$city=$_POST['city'];
$state=$_POST['state'];
$involvement=$_POST['Involvement'];
$property=$_POST['property'];


if($name =="")
{
    echo "<script>
    alert('Please Enter your name');
    window.location.href = 'parent.html';
</script>";
    exit();
}
if($email ==""){
    echo "<script>
    alert('Please Enter your email address');
    window.location.href = 'parent.html';
</script>";
    exit();
}
if($phone ==""){
    echo "<script>
    alert('Please Enter your Phone number');
    window.location.href = 'parent.html';
</script>";
    exit();
}
if($occupation ==""){
    echo "<script>
    alert('Please Enter your Occupation');
    window.location.href = 'parent.html';
</script>";
    exit();
}
if($city ==""){
    echo "<script>
    alert('Please Enter your city');
    window.location.href = 'parent.html';
</script>";
    exit();
}
if($state ==""){
    echo "<script>
    alert('Please Enter your state');
    window.location.href = 'parent.html';
</script>";
    exit();
}
if($involvement ==""){
    echo "<script>
    alert('Enter Involvement type');
    window.location.href = 'parent.html';
</script>";
    exit();
}
 
if($property ==""){
    echo "<script>
    alert('Enter Property type');
    window.location.href = 'parent.html';
</script>";
    exit();
}
 
$sql="INSERT INTO `partnership_db`(`Name`, `Email`, `Phone`, `Occupation`, `City`, `State`, `Involvement type`, `Property type`) 
VALUES ('$name','$email','$phone','$occupation','$city','$state','$involvement','$property')";

$result=mysqli_query($con,$sql);
if($result){
    echo "<script>
alert('Thank you for your intrest in partnership with US $name.Will connect you accordingly!');
window.location.href = 'partner.html';
</script>";
exit(); 
}
else{
    echo "<script>
    alert('Contact Fail');
    </script>";
}

?>
