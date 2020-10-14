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
    $req = $bdd->prepare('INSERT INTO user(Nom, Prenom, Email, Motdepasse) VALUES(:nom, :prenom, :email, :motdepasse)');
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
         
           
           
           <li><br><a href="contacter.php"> NOUS CONTACTER ! </a></li><br>
           <!---<logo d'université en bas de la page>--->
           <img src="logopsud.jpg" align="center" border="1" width="170" >
           <br>
<?php
date_default_timezone_set("Europe/Brussels");
$date = date("d-m-Y");
$heure = date("H:i");
Print(" $date $heure");
?>
             <img src="ps.png" align="center" border="1" width="170" >

 
      </ul>
     
        
        <!--<div classe="zone_texte" style=margin-top:3.5em; style= margin-left:20%;>
<h2 style = "text-align:center">Veuillez remplir les champs suivants pour vous inscrire<h2>-->
        <div class="zone_texte">
            <h2>Veuillez remplir les champs suivants pour nous contacter!<h2>
                  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"  >
                       
                        <input type="text" size=30 name="nom"  placeholder="Veuillez saisir votre nom" ><br>
                        
                        <input type="text" size=30 name="prenom"  placeholder="Veuillez saisir votre prénom" ><br>
                        
                        <input type="email" size=30 name="email" placeholder="Entrer votre E-mail" ><br>
                        
                                     <br>                  
                                
                                <textarea id="story" name="story"
                                          rows="10" cols="50" placeholder="Votre message ici!">
                               
                                </textarea>
                              
                              <br> 
                        <input type="submit" name="submit" value="Envoyer" ><br>
                        
                        <?php
                        
                        if (isset($_POST['submit'])){
                         
                          
                        }
                        
                      
                        ?>
                        
                      

                   
        </div>
                   

    </form>            

</body>

</html>
