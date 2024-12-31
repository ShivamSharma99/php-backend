<?php
require 'config.php';

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    // Check for duplicate username or email
    $duplicate = mysqli_query($conn, "SELECT * FROM registration WHERE username='$username' OR email='$email'");

    if (mysqli_num_rows($duplicate) > 0) {
        echo "<script>
                alert('Username or email is already existing');
                window.location.href = 'registration.html';
              </script>";
        exit();
    } else {
        if($name =="" or $username =="" or $email==""){
            echo "<script>
            alert('Please register youself to login');
            window.location.href = 'registration.html';
          </script>";
        }
        if($password ==""){
            echo "<script>
            alert('Please enter Password');
            window.location.href = 'registration.html';
          </script>";
        }
        if($confirmpassword ==""){
            echo "<script>
            alert('Please enter Password to confirm');
            window.location.href = 'registration.html';
          </script>";
        }
        // Check if passwords match
        if ($password == $confirmpassword) {
            $query = "INSERT INTO `registration`(`Name`, `Username`, `Email`, `Password`) 
                      VALUES ('$name','$username','$email','$password')";
            if (mysqli_query($conn, $query)) {
                echo "<script>
                        alert('Registration successful');
                        window.location.href = 'index.html';
                      </script>";
            } else {
                echo "<script>
                        alert('Error in registration');
                        window.location.href = 'registration.html';
                      </script>";
            }
            exit();
        } else {
            echo "<script>
                    alert('Passwords do not match');
                    window.location.href = 'registration.html';
                  </script>";
            exit();
        }
    }
}
?>
