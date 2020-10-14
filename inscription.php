<!DOCTYPE html>
<link rel="stylesheet" href="projet2.css" />
<html>
 
 </head>
<meta charset="utf-8">
<script src="java.js"></script>
 <header>
    Genome Analysis Tools
    </header>
<body>


<?php 
    
        $d1=$_POST['nom'];
        $d2=$_POST['prenom'];
        $d3=$_POST['email'];
        $d4=$_POST['password'];
        $d5=$_POST['repeatpassword'];
       
     
          
 ?>
 
 
 
    <!-- On se connecte à la base de données.-->
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
                       
                       // On modifie la table user;
                       
      
                   
       if($d1!='' && $d2!='' && $d3!='' && $d4!='') {
        if($d4==$d5){
    $req = $bdd->prepare('INSERT INTO users(nom, prenom, email, password) VALUES(:nom, :prenom, :email, :motdepasse)');
    $req->execute(array(
        'nom' => $d1,
        'prenom' => $d2,
        'email' => $d3,
        'motdepasse' => $d4,
        
        ));
       }
       }
       
   
?>
      
    
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
           
           <li><br><a href="contacter.php"> NOUS CONTACTER ! </a></li><br>
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
     
        
        <!--<div classe="zone_texte" style=margin-top:3.5em; style= margin-left:20%;>
<h2 style = "text-align:center">Veuillez remplir les champs suivants pour vous inscrire<h2>-->
        <div class="zone_texte"><br>
            <h2>Veuillez remplir les champs suivants pour vous inscrire<h2>
                  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"  >
                       
                        <input type="text" size=30 name="nom"  placeholder="Veuillez saisir votre nom" ><br>
                        
                        <input type="text" size=30 name="prenom"  placeholder="Veuillez saisir votre prénom" ><br>
                        
                        <input type="email" size=30 name="email" placeholder="Entrer votre E-mail" ><br>
                        
                        <input type="password" size=30 name="password" placeholder="Entrer votre mot de passe"> <br>
                        
                        <input type="password" size=30 name="repeatpassword" placeholder="Veuillez confirmer votre mot de passe "><br><br>
                     
                     
                       
                        <input type="submit" name="submit" value="Inscription" ><br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <?php
                        
                        if (isset($_POST['submit'])){
                         
                         
                         
                          if($d4!=$d5){
                           echo '<span style="color:red;">Les deux mot de passe ne sont pas identique !</span>';
                          
                          }
                          else{
                         
                         echo '<span style="color:green;">Inscription effectuée avec succeés !</span>';
                         
                         }
         
                        }
                        
                      
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
                      
                        
                        
                      

                   
        </div>
                   

    </form>            

</body>

</html>
