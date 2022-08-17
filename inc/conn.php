<?php 

//defining host
$host = "localhost";

//define username
$username = "root";

//define password
$password = "";

//define database
$database = "projectweb";

$conn = mysqli_connect($host , $username , $password , $database);

if(!$conn){
    die("Database connection failed" . mysqli_connect($conn));
}
else{
    // echo "Database connection success!!";
}

?>