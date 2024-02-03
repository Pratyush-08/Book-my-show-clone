<?php

session_start();
$_SESSION['uname'] = $_POST['uname'];
$username = $_POST['uname'];
$password = $_POST['pass'];

if ($username && $password) {
    $connect = mysqli_connect("localhost", "root", "") or die ("Could'nt connect to database!"); //database connection
    mysqli_select_db($connect, "prat") or die ("Could'nt find database");
    $query   = ("SELECT * FROM register WHERE Email= '$username'");
    $result  = mysqli_query($connect, $query);
    $numrows = mysqli_num_rows($result);

    if ($numrows !== 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $dbusername = $row['Email'];
            $dbpassword = $row['Passwd'];
        }
        if ($username == $dbusername && $password == $dbpassword) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header('location: index2.html'); //another file to send request to the next page if values are correct.

            exit();
        } else {
            echo "Password Incorrect";
        }
        exit();
    } else {
        die("That user doesn't exists!");
    }
} else {
    die("Please enter a username and password");
}
?>