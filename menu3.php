<!DOCTYPE html>
<link rel="stylesheet" href="projet2.css" />
<html>
 <style>
  table,tr,th,td
  {
   border: 1px solid black;
  }
 </style>
<meta charset="utf-8">
 <header>
        Genome Analysis Tools
    </header>
<body>

 
 

    

                 

    
        <ul>
         <li><a href="menu.php"> ACCUEIL  </a></li>
          <li><a href="visualisation.html"> VISUALISATION DES GENOMES  </a></li>
          <li><a href="recherche.php"> RECHERCHER</a></li>
          <li><a href="alignement.php"> ALIGEMENT DE SEQUNECES </a></li>
          <li><a href="annotation.php"> ANNOTATION </a></li>
          <li><a href="forum.php"> FORUM </a></li> 
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
           
           <li><br><a href="contacter.php"> NOUS CONTACTER ! </a></li><br>
           <!---<logo d'université en bas de la page>--->
           <img src="logopsud.jpg" align="center" border="1" width="170" >
<br>
<?php
$date = date("d-m-Y");
$heure = date("H:i");
Print(" $date $heure");
?>
             <img src="ps.png" align="center" border="1" width="170" >

      </ul>
     
        
        <!--<div classe="zone_texte" style=margin-top:3.5em; style= margin-left:20%;>
<h2 style = "text-align:center">Veuillez remplir les champs suivants pour vous inscrire<h2>-->
        <div class="zone_texte">
             
            <br>
            <br>
                 
                     
        
 
      </div>
 
</body>

</html>
