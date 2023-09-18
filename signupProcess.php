<?php
    
    include "myConnection.php";

    $email = $_POST['email'];
    $name = $_POST["fname"];
    $password= $_POST["password"];
    $passwordEncrypt = md5($password);
    
    $query = "INSERT INTO dl ( email, name, password)
             VALUE ('$email', '$name', '$passwordEncrypt')";

    $checkQuery = "SELECT name FROM dl WHERE name = '$name'";
    $result = mysqli_query($connect, $checkQuery);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Name is already taken!'); window.location = 'index.php';</script>";
    } elseif (strlen(trim($password)) < 8) {
        echo "<script>alert('Password is at least 8 characters!'); window.location = 'index.php';</script>";
    } else {
      
        $query = "INSERT INTO dl (email, name, password) VALUES ('$email', '$name', '$passwordEncrypt')";
        
        if (mysqli_query($connect, $query)) {
            echo "<script>alert('Sign up successfully'); window.location = 'index.php';</script>";
        } else {
            echo "New record failed to add <br>" . mysqli_error($connect);
        }
    }
    mysqli_close($connect);
?>
<html>
    <head>
    <script type="text/javascript">
            var yes = confirm("Sign up successfully");
            
            if (yes) {
                window.location.replace("index.php");
            }
            else{
                document.write("Please go to Login Page");
            }
        </script>
    </head>
</html>