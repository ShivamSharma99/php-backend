<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location: index.html");
}
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Fetch the user details from the database
    $result = mysqli_query($conn, "SELECT * FROM registration WHERE username='$username'");
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        if($password ==""){
            echo "<script>
            alert('Please enter password');
            window.location.href = 'login.html';
          </script>"; 
        }
        // Verify the password using password_verify
        if ($password == $row["Password"]) {
            // Password matches, start the session
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: index.html");
            exit();
        } else {
            // Incorrect password
            echo "<script>
                    alert('Wrong password');
                    window.location.href = 'login.html';
                  </script>";
        }
    } else {
        // User not registered
        echo "<script>
                alert('User not registered');
                window.location.href = 'login.html';
              </script>";
        exit();
    }
}
?>
