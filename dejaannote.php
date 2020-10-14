<?php
session_start();
$_SESSION['email']=$_POST['email'];
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
         <li><a href="menu.php"> ACCUEIL  </a></li>
          <li><a href="visualisation.php"> VISUALISATION DES GENOMES  </a></li>
          <li><a href="recherche.php"> RECHERCHER</a></li>
          <li><a href="alignement.php"> ALIGEMENT DE SEQUNECES </a></li>
           <li><a href="dejaannote.php"> SEQUNECES ANNOTEES </a></li>
          <li><a href="annotation.php"> ANNOTATION </a></li>
          <li><a href="forum.php"> FORUM</a></li> 
          <li><a href="inscription.php"> S'INSCRIRE </a></li>
         
           
           <?php
              
             if (isset($_POST['sub']))
             {
             $email=htmlspecialchars($_POST['email']);
             $password=htmlspecialchars($_POST['password']);
             if(!empty($email) AND !empty($password))
             {
              
               $bdd = new PDO('mysql:host=localhost;dbname=ODS_DB;charset=utf8', 'root', "root");
               $requser=$bdd->prepare("SELECT * FROM users WHERE email=? AND password=?");
               $requser->execute(array($email,$password));
               $userexist=$requser->rowCount();
               if($userexist==1)
               {
               // echo '<span style="color:green;">Working!!</span>';
               $userinfo=$requser->fetch();
               $_SESSION['id']=$userinfo['id'];
               $_SESSION['prenom']=$userinfo['prenom'];
               $_SESSION['email']=$userinfo['email'];
                if ($userinfo['email']=="admin@gmail.com")
                {
               header("Location: admin.php?id=".$_SESSION['id']);
                }
                else {
                  header("Location: profil.php?id=".$_SESSION['id']);
                }
      
               }
               else
               {
                 echo '<span style="color:red;">ID ou Mot de passe invalide!</span>';
               }
             }
             else
             {
              echo '<span style="color:red;">Please put the Email and Password!</span>';
              
             }
            }
             
?>
           
           
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
             <img src="ps.png" align="center" border="0" width="210" >
          
             
      </ul>
      
      
     
    
  
  <!--<div style="display:inline; width:80%; position:relative";> -->
    <div class="zone_texte">
      <?php
try
{

 
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=ODS_DB;charset=utf8', 'root', "root");
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

$membre = $bdd->query("SELECT * FROM annotation WHERE valider='oui'  ");



?>
<?php
            
                  echo '<font FACE="Prestige" LANG="fr" SIZE="6" color="black">Ci-dessous les sequences qui ont déjà été annotées</font>';
                  echo "<br>";
                  
                      
              // echo "Résultats de la recherche";
       
                   

    
        echo '<table>
                <tr>
                    
                    <th>Annoteur</th>
                    
                     <th>Date de validation</th>
                    
                    <th>Annotation</th>
                    
                   
                    
                </tr>
                <tr>';
        while ($data = $membre->fetch()  ) {
         
         
           echo '<td>'.$data['email']. '</td>
                 
                  <td>'.$data['day'].'</td>
                  <td> <a href="verification2.php?id='.urlencode($data['email']).'">voir</a></td>
                  
                 
                  
                 
                </tr>';
            
        }
       
     
               
       
        echo '</table>';
                     
                  
                   
                     
     ?>
       <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <br>
    <br>
    <br>
<br>
    <br>
    <br>
    <br>
  </div>
</body>
</html>
