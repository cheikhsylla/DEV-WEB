<?php
session_start();
if(isset($_SESSION['id']) ) {
 include("profil.php");
}else{
    include("menu3.php");
   
}
?>

