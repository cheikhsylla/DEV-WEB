<?php
session_start();
if(isset($_SESSION['id']) ) {
 include("toannote.php");
}else{
    include("mustconnect.php");
   
}
?>



