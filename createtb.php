<?php
    
$hostname = "localhost";
$username = "root";
$password = "";
$database = "gamoso";

$port = 3306; // Replace with the appropriate port number for your MySQL server

$connect = mysqli_connect($hostname, $username, $password, $database, $port);


$query = "CREATE TABLE dl(
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(100),
    name VARCHAR(30) NOT NULL,
    password VARCHAR(100)
)";

if(mysqli_query($connect, $query)){
    echo "Student table created successfully";
}
else{
    echo "Student table failed to create <br>" . mysqli_error($connect);
}

mysqli_close($connect);


?>