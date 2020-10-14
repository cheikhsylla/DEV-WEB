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
          <li><a href="super.php"> EN COURS </a></li>
          <li><a href="super1.php"> A VALIDER </a></li>
          <li><a href="forum.php"> FORUM </a></li> 
          <li><a href="membre.php"> MEMBRES </a></li>
         
           
            
            
             <?php
             
             $bdd = new PDO('mysql:host=localhost;dbname=ODS_DB;charset=utf8', 'root', "root");
             if(isset($_GET['id']) AND $_GET['id'] > 0)
             {
              $getid= intval($_GET['id']);
                $requser=$bdd->prepare('SELECT * FROM users WHERE id= ?');
                $requser->execute(array($getid));
                $userinfo=$requser->fetch();
                $_SESSION['email']=$userinfo['email'];
             
                
                
                echo'<span style="color:green;font-weight: bold;">Bienvenue </span>'; 
            
                echo "<font size= 6 color='green'>".$userinfo['prenom']."</font>";
                
                echo '.';
                
                //echo "<font size= 6 color='green'>".$userinfo['nom']."</font>";
            
                
                
                    
                }
                
             
             
             ?>
          
             
             <br>
             <form name="x" action="deconnexion.php" method="post">
                   <pre>         <input type="submit" value="Se déconnecter"   style="background-color:red;color: white"> </pre>
            </form>
              
                
             
             
            
            
      
           
           
           <li><br><a href="contacter.php"> NOUS CONTACTER ! </a></li><br>
           <!---<logo d'université en bas de la page>--->
        <img src="logopsud.jpg" align="center" border="0" width="170" >
 <br>
<?php
date_default_timezone_set("Europe/Brussels");
$date = date("d-m-Y");
$heure = date("H:i");
Print(" $date $heure");
?>
             <img src="ps.png" align="center" border="0" width="170" >
          

      </ul>
    
    
  
  <!--<div style="display:inline; width:80%; position:relative";> -->
    <div class="zone_texte">
      
      
     
      <p>Some text..</p>
      <p>Some text..</p>
      <p>Some text..</p>
      <p>Some text..</p>
      <p>Some text..</p>
      <p>Some text..</p>
      <p>Some text..</p>
      <p>Some text..</p>
      <p>Some text..</p>
      <p>Some text..</p>
      <p>Some text..</p>
      <p>Some text..</p>
      <p>Some text..</p>
      <p>Some text..</p>
      <p>Some text..</p>
      <p>Some text..</p>
      <p>Some text..</p>
      <p>Some text..</p>
      <p>Some text..</p>
      <p>Some text..</p>
      <p>Some text..</p>
      <p>Some text..</p>
  </div>
</body>
</html>