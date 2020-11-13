<?php
include_once 'connect.php';
if(isset($_POST['submit']))
{    
     $voornaam = $_POST['voornaam'];
     $tussenvoegsel = $_POST['tussenvoegsel'];
     $achternaam = $_POST['achternaam'];
     $telefoonnummer = $_POST['telefoonnummer'];
     $emailadres = $_POST['emailadres'];
 
     $sql = "INSERT INTO gasten (voornaam, tussenvoegsel, achternaam, telefoonnummer, emailadres) VALUES ('$voornaam','$tussenvoegsel','$achternaam', '$telefoonnummer', '$emailadres')";
 
     if (mysqli_query($conn, $sql)) {
        header("Location:index.php");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>