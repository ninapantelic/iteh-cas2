<!-- //konekcija sa bazom -->
<?php

$host= "localhost";
$db="kolokvijumi";
$user="root";
$pass="";

$conn=new mysqli($host,$user,$pass,$db);

if($conn->connect_errno){ 

    // ovo errno vraca broj greske kao ono error 404
    exit("Neuspesna konekcija: greska> ".$conn->connect_error.", err kod>".$conn->connect_errno);
}


?>