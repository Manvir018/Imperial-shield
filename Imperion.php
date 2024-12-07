<?php
$servername = "localhost"; 
$username = "root"; 
$password = "1871"; 
$dbname = "Imperion"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO IMP (first_name, last_name, email, phone, message) 
            VALUES ('$first_name', '$last_name', '$email', '$phone', '$message')";

    // if ($conn->query($sql) === TRUE) {
    //     echo "Message sent successfully!";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
}

$conn->close();
?>
