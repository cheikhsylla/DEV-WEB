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
         
           <form  method="POST" action="" class="connection">
            
            <input type="email" size=30 name="email" placeholder="Identifiant" "/>
                        
             <input type="password" size=30 name="password" placeholder=" mot de passe">
             
               
             
             <input type="submit" name="sub" value="connexion" >
             
            
        </form>
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
           
           
          <li><br><a href="mailto:admin.genalaytolls@gmail.com">NOUS CONTACTER</a></li><br>

           <!---<logo d'université en bas de la page>--->
        <img src="logopsud.jpg" align="center" border="0" width="160" >
        <br>
<?php
date_default_timezone_set("Europe/Brussels");
$date = date("d-m-Y");
$heure = date("H:i");
Print(" $date $heure");
?>
             <img src="ps.png" align="center" border="0" width="130" >
          
             
      </ul>
      
      
     
    
  
  <!--<div style="display:inline; width:80%; position:relative";> -->
    <div class="zone_texte">
      <h1 class="h1_modif">BIENVENUE</h1>
   
      <p class="pmenu_1">Bienvenur sur l'outil d'alalyse génomique. Il s'agit d'un outil dédié pour l'analyse de génome bactérien. Les outils
      ci-desoous sot mis à votre disposition.</p><br>
    
      <p class ="pmenu_2"> <b>VISUALISATION DU GENOME</b><br>Cet outil permet de visusaliser l'ensemble du génome de la bactérie E. Coli.</p><br>

      <p class="pmenu_3"><b>RECHERCHER</b><br>Permet de rechercher une séquence dans la base de données locale.</p><br>

      <p class="pmenu_4"><b>ALIGNEMENT DE SEQUNECES</b><br>Permet d'aligner une éqeunce contre la banque de données locale ou Blast.</p><br>

      <p class="pmenu_5"><b>ANNOTATION</b><br>Des séqunces non annotées sont mises à votre disposition. Choisissez une séquence et annotez-la. </p><br>

      <p class="pmenu_5"><b>INSCRIPTION</b><br>Incrivez-vous pour profiter pleinement de l'outil.<br>
       Certaines options de l'outil (annotation, recherche, aligenement, forum) nécessitent d'être connecté pour les utiliser. </p> <br>

      <p class="pmenu_5"><b>LIENS UTILS</b><br>
      <!--<a href = "https://www.ncbi.nlm.nih.gov/"> NCBI &nbsp</a>
      <a href = "https://blast.ncbi.nlm.nih.gov/Blast.cgi"> BLAST</a>
      <a href = "https://www.uniprot.org/"> UNIPROT</a>
      <a href = "https://www.rcsb.org/"> PDB</a> -->
      <a href="https://www.ncbi.nlm.nih.gov/" style="text-decoration:none">NCBI &nbsp &nbsp &nbsp</a>
      <a href="https://blast.ncbi.nlm.nih.gov/Blast.cgi" style="text-decoration:none">BLAST &nbsp &nbsp &nbsp </a>
      <a href="https://www.uniprot.org/" style="text-decoration:none">UNIPROT&nbsp &nbsp &nbsp</a>
      <a href="https://www.rcsb.org/" style="text-decoration:none">PDB</a>
      <br><br><br><br>
  </div>
</body>
</html>