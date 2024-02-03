<?php

// $tickprc1=230;
// $tickprc2=250;
// $tickprc3=210;
// $tickprc4=340;
// $tickprc5=112;
$Seats = $_SESSION['Seats'];


echo(" &nbsp; Film : ".$_SESSION['Film']);
echo(" &nbsp; (Tickets ".$_SESSION['Seats']);
if($_SESSION['Film']=="Sooryavanshi")
{   if($_SESSION['Ticket']=="gold")
    {
        $tickprc1=230;
        $price=$tickprc1*$Seats;
        $charge=$price*0.10;
        $gst=$charge*0.18;
        $cgst=$gst/2;
        $total=$price+$charge+$gst;
    }
    elseif($_SESSION['Ticket']=="silver"){
        $tickprc1=200;
        $price=$tickprc1*$Seats;
        $charge=$price*0.10;
        $gst=$charge*0.18;
        $cgst=$gst/2;
        $total=$price+$charge+$gst;
    }
    elseif($_SESSION['Ticket']=="bronze"){
        $tickprc1=170;
        $price=$tickprc1*$Seats;
        $charge=$price*0.10;
        $gst=$charge*0.18;
        $cgst=$gst/2;
        $total=$price+$charge+$gst;
    }
    else{
        echo("Sorry, There is some Error from our side.");
    }
}
elseif($_SESSION['Film']=="Resident Evil")
{
    if($_SESSION['Ticket']=="gold")
    {
        $tickprc1=250;
        $price=$tickprc1*$Seats;
        $charge=$price*0.10;
        $gst=$charge*0.18;
        $cgst=$gst/2;
        $total=$price+$charge+$gst;
    }
    elseif($_SESSION['Ticket']=="silver"){
        $tickprc1=220;
        $price=$tickprc1*$Seats;
        $charge=$price*0.10;
        $gst=$charge*0.18;
        $cgst=$gst/2;
        $total=$price+$charge+$gst;
    }
    elseif($_SESSION['Ticket']=="bronze"){
        $tickprc1=180;
        $price=$tickprc1*$Seats;
        $charge=$price*0.10;
        $gst=$charge*0.18;
        $cgst=$gst/2;
        $total=$price+$charge+$gst;
    }
    else{
        echo("Sorry, There is some Error from our side.");
    }
}
elseif($_SESSION['Film']=="Pandu")
{
    if($_SESSION['Ticket']=="gold")
    {
        $tickprc1=210;
        $price=$tickprc1*$Seats;
        $charge=$price*0.10;
        $gst=$charge*0.18;
        $cgst=$gst/2;
        $total=$price+$charge+$gst;
    }
    elseif($_SESSION['Ticket']=="silver"){
        $tickprc1=180;
        $price=$tickprc1*$Seats;
        $charge=$price*0.10;
        $gst=$charge*0.18;
        $cgst=$gst/2;
        $total=$price+$charge+$gst;
    }
    elseif($_SESSION['Ticket']=="bronze"){
        $tickprc1=150;
        $price=$tickprc1*$Seats;
        $charge=$price*0.10;
        $gst=$charge*0.18;
        $cgst=$gst/2;
        $total=$price+$charge+$gst;
    }
    else{
        echo("Sorry, There is some Error from our side.");
    }
}
elseif($_SESSION['Film']=="Tadap")
{
    if($_SESSION['Ticket']=="gold")
    {
        $tickprc1=340;
        $price=$tickprc1*$Seats;
        $charge=$price*0.10;
        $gst=$charge*0.18;
        $cgst=$gst/2;
        $total=$price+$charge+$gst;
    }
    elseif($_SESSION['Ticket']=="silver"){
        $tickprc1=300;
        $price=$tickprc1*$Seats;
        $charge=$price*0.10;
        $gst=$charge*0.18;
        $cgst=$gst/2;
        $total=$price+$charge+$gst;
    }
    elseif($_SESSION['Ticket']=="bronze"){
        $tickprc1=270;
        $price=$tickprc1*$Seats;
        $charge=$price*0.10;
        $gst=$charge*0.18;
        $cgst=$gst/2;
        $total=$price+$charge+$gst;
    }
    else{
        echo("Sorry, There is some Error from our side.");
    }
}
elseif($_SESSION['Film']=="Antim : The Final Truth")
{
    if($_SESSION['Ticket']=="gold")
    {
        $tickprc1=150;
        $price=$tickprc1*$Seats;
        $charge=$price*0.10;
        $gst=$charge*0.18;
        $cgst=$gst/2;
        $total=$price+$charge+$gst;
    }
    elseif($_SESSION['Ticket']=="silver"){
        $tickprc1=120;
        $price=$tickprc1*$Seats;
        $charge=$price*0.10;
        $gst=$charge*0.18;
        $cgst=$gst/2;
        $total=$price+$charge+$gst;
    }
    elseif($_SESSION['Ticket']=="bronze"){
        $tickprc1=100;
        $price=$tickprc1*$Seats;
        $charge=$price*0.10;
        $gst=$charge*0.18;
        $cgst=$gst/2;
        $total=$price+$charge+$gst;
    }
    else{
        echo("Sorry, There is some Error from our side.");
    }
}
echo(") &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &#8377;".$price);
echo("<br> &nbsp; Convenience Charge : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &#8377;".$charge);
echo("<br> &nbsp; GST (18%) : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &#8377;".$gst);
echo("<br> &nbsp; Central GST (CGST) @9%  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &#8377;".$cgst);
echo("<br> &nbsp; State GST (SGST) @9%  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp &nbsp; &nbsp; &nbsp; &#8377;".$cgst);
echo("<br><br><br><br> &nbsp; Amount Payable : ".$total)





?>