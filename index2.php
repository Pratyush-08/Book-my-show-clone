<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prat";
session_start();
$_SESSION['fname'] = $_POST['fname'];
$fname = $_POST['fname'];
$_SESSION['lname'] = $_POST['lname'];
$lname = $_POST['lname'];
$_SESSION['mobno'] = $_POST['phonenumber'];
$mobno = $_POST['phonenumber'];
$_SESSION['age'] = $_POST['age'];
$age = $_POST['age'];
$_SESSION['gender'] = $_POST['gender'];
$gender = $_POST['gender'];
$_SESSION['email'] = $_POST['email'];
$email = $_POST['email'];
$_SESSION['passwd'] = $_POST['pass'];
$passwd = $_POST['pass'];


// $fname = $_POST['fname'];
// $lname = $_POST['lname'];
// $mobno = $_POST['phonenumber'];
// $age = $_POST['age'];
// $gender = $_POST['gender'];
// $email = $_POST['email'];
// $passwd = $_POST['pass'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO register (First_name, Last_name, Mobile_no, Age, Gender, Email, Passwd)
VALUES ('$fname', '$lname', '$mobno', '$age', '$gender', '$email', '$passwd')";

if ($conn->query($sql) === TRUE) {
    header("Location: index2.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>