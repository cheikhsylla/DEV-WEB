<?php
session_start();
?>


<!DOCTYPE html>
<link rel="stylesheet"  href="projet2.css"/>


<html lang="fr">
  <header>  
      Genome Analysis Tools
  </header>  

<body>
  

  
  
  
  <!---<div style ="display: block;">--->
  <!-- <div style="display:inline; width:20%; position:relative;">-->
      <ul>
         <li><a href="menu2.php"> ACCUEIL  </a></li>
          <li><a href="visualisation.html"> VISUALISATION DES GENOMES  </a></li>
          <li><a href="recherche.php"> RECHERCHER</a></li>
          <li><a href="alignement.php"> ALIGEMENT DE SEQUNECES </a></li>
          <li><a href="annotation.php"> ANNOTATION </a></li>
          <li><a href="forum.php"> FORUM </a></li> 
          <li><a href="inscription.php"> S'INSCRIRE </a></li>
         
           
            
            
             <?php
             /*
             $bdd = new PDO('mysql:host=localhost;dbname=ODS_DB;charset=utf8', 'root', "root");
             if(isset($_GET['id']) AND $_GET['id'] > 0)
             {
              $getid= intval($_GET['id']);
                $requser=$bdd->prepare('SELECT * FROM users WHERE id= ?');
                $requser->execute(array($getid));
                $userinfo=$requser->fetch();
             
                
                
                echo'<span style="color:green;font-weight: bold;">Bienvenue </span>'; 
            
                echo "<font size= 6 color='green'>".$userinfo['prenom']."</font>";
                
                echo '.';
                
                echo "<font size= 6 color='green'>".$userinfo['nom']."</font>";
            
                
                
                    
                }
                
             */
             
             ?>
          
         
             
             <br>
             <form name="x" action="deconnexion.php" method="post">
                   <pre>         <input type="submit" value="Se déconnecter"   style="background-color:red;color: white"> </pre>
            </form>
              
                
             
             
            
            
      
           
           
           <li><br><a href="contacter.php"> NOUS CONTACTER ! </a></li><br>
           <!---<logo d'université en bas de la page>--->
        <img src="logopsud.jpg" align="center" border="0" width="200" >
<br>
<?php
date_default_timezone_set("Europe/Brussels");
$date = date("d-m-Y");
$heure = date("H:i");
Print(" $date $heure");
?>
             <img src="ps.png" align="center" border="0" width="180" >

      </ul>
      
      
     
    
  
  <!--<div style="display:inline; width:80%; position:relative";> -->
    <div class="zone_texte">
        <table valign="top" vidth="100" border="1" cellpadding="0" cellspacing="0">
                <td height="50" bgcolor="331A7C">
                    <h1 align="center"><font color="white">FORUM</font></h1>
                </td>
                    <tr />
      <td height="900" width="1100" bgcolor="lightgrey">
                        <iframe src="http://http-localhost888.forumactif.com//" height="100%" width="100%"></iframe>
                </td>
          
  </div>                         
</body>
</html>