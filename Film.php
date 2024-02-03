<?php
session_start();
$_SESSION['Seats'] = $_POST['Seats'];
$Seats = $_POST['Seats'];
$_SESSION['Film'] = $_POST['Film'];
$Film = $_POST['Film'];
$_SESSION['Ticket'] = $_POST['slct2'];
$Ticket = $_POST['slct2'];

// echo("Ticket type : ".$Ticket);
// echo("Film : ".$Film);

if($Film=="Sooryavanshi"){
    include("Sooryavanshi.html");
}
elseif($Film=="Resident Evil"){
    include("Resident Evil.html");
}
elseif($Film=="Pandu"){
    include("Pandu.html");
}
elseif($Film=="Tadap"){
    include("Tadap.html");
}
elseif($Film=="Antim : The Final Truth"){
    include("Antim.html");
}

else{
    echo("An Unexpected Error Occured !!!");
}





?>