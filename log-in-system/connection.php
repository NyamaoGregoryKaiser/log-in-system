<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="footballdb";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("FAILED TO CONNECT!!!"); 
}

?> 