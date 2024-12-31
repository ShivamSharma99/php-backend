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
$date=$_POST['date'];
$time=$_POST['time'];
$service=$_POST['service'];

$sql="INSERT INTO `appointment_db`(`Name`, `Email`, `Date`, `Time`, `Service`) 
VALUES ('$name','$email','$date','$time','$service')";

$result=mysqli_query($con,$sql);

if($result){
//     $to = $email;
//     $subject = "My subject";
//     $txt = "Hello world!";
//     $from = "sonalisah807@gmail.com";
//     $headers="from : $from";

// if (mail($to,$subject,$txt,$headers)){
//     echo "send";
// }
// else{
//     echo"notsend";
// }
echo "<script>
alert('Appointment Successful!');
window.location.href = 'appointment.html';
</script>";
// echo "mail sent";
// header("Location: appointment.html");  
    exit(); 
}
else{
    echo "<script>
    alert('Appointment Fail!');
    </script>";
}

?>
