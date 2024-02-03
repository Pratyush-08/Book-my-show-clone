<?php
session_start();
$_SESSION['Day_Date'] = $_POST['Day_Date'];
$Day_Date = $_POST['Day_Date'];

$_SESSION['Time'] = $_POST['Time'];
$Time = $_POST['Time'];

include("Payment.html");




?>