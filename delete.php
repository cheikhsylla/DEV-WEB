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
    
        $d1=$_POST['longg'];
        
     
          
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
                       
      
                   
       if($d1!='') {
       
    $req = $bdd->prepare('INSERT INTO annotation(nom) VALUES(:nom)');
    $req->execute(array(
        'nom' => $d1,
        
        
        ));
       
       }
       
   
?>
      
      
      
    
        <ul>
         <li><a href="menu2.php"> ACCUEIL  </a></li>
          <li><a href="visualisation.html"> VISUALISATION DES GENOMES  </a></li>
          <li><a href="recherche.php"> RECHERCHER</a></li>
          <li><a href="alignement.php"> ALIGEMENT DE SEQUNECES </a></li>
          <li><a href="annotation.php"> ANNOTATION </a></li>
          <li><a href="forum.php"> FORUM </a></li> 
          <li><a href="inscription.php"> S'INSCRIRE </a></li>
         
           
           
           <li><br><a href="contacter.php"> NOUS CONTACTER ! </a></li><br>
           <!---<logo d'université en bas de la page>--->
           <img src="logopsud.jpg" align="center" border="1" width="170" >

 
      </ul>
     
        
        <!--<div classe="zone_texte" style=margin-top:3.5em; style= margin-left:20%;>
<h2 style = "text-align:center">Veuillez remplir les champs suivants pour vous inscrire<h2>-->
        <div class="zone_texte">
            <form action="" method="POST">
                <p>
                <label style="vertical-align: top" for="seq_geno"><b>Séquence</b></label><br>
                <textarea id="story" name="seq" rows="5" cols="100" style="overflow:auto;resize:auto"> </textarea>
               </p>
                <p>
                <label style="vertical-align: top" for="seq_geno"><b>Provenance</b> </label><br>
                <textarea id="story" name="long" rows="2" cols="100" style="overflow:auto;resize:none"> </textarea>
                </p>
                <p>
                <label style="vertical-align: top" for="seq_geno"><b>Longueur</b> </label><br>
                <textarea id="story" name="longg" rows="2" cols="100" style="overflow:auto;resize:none"> </textarea>
                </p>
                <p>
                <label style="vertical-align: top" for="seq_geno"><b>Statut</b> </label><br>
                <textarea id="story" name="long" rows="2" cols="100" style="overflow:auto;resize:none"> </textarea>
                </p>
                <p>
                <label style="vertical-align: top" for="seq_geno"><b>Traduction</b> </label><br>
                <textarea id="story" name="long" rows="5" cols="100" style="overflow:auto;resize:auto"> </textarea>
                </p>
                <p>
                <label style="vertical-align: top" for="seq_geno"><b>Taxonomie</b> </label><br>
                <textarea id="story" name="long" rows="5" cols="100" style="overflow:auto;resize:auto"> </textarea>
                </p>
                <p>
                <label style="vertical-align: top" for="seq_geno"><b>Processus biologique</b> </label><br>
                <textarea id="story" name="long" rows="2" cols="100" style="overflow:auto;resize:auto"> </textarea>
                </p>
                <p>
                <label style="vertical-align: top" for="seq_geno"><b>Fonction moléculaire</b> </label><br>
                <textarea id="story" name="long" rows="2" cols="100" style="overflow:auto;resize:none"> </textarea>
                </p>
                <p>
                <label style="vertical-align: top" for="seq_geno"><b>Domaine protéique</b> </label><br>
                <textarea id="story" name="long" rows="2" cols="100" style="overflow:auto;resize:none"> </textarea>
                </p>
                <p>
                <label style="vertical-align: top" for="seq_geno"><b>Blast</b> </label><br>
                <textarea id="story" name="long" rows="5" cols="100" style="overflow:auto;resize:none"> </textarea>
                </p>
                <p>
                <label style="vertical-align: top" for="seq_geno"><b>Conclusion</b> </label><br>
                <textarea id="story" name="long" rows="5" cols="100" style="overflow:auto;resize:none"> </textarea>
                </p>
                <p>
                <label style="vertical-align: top" for="seq_geno"><b>Commentaires</b> </label><br>
                <textarea id="story" name="long" rows="4" cols="100" style="overflow:auto;resize:none"> </textarea><br>
                </p>

                <INPUT  Value="Enregistrer" name="save" Type="submit">
                <INPUT  Value="Effacer" Type="RESET">
                
            </form>
                        
                        <?php
                        
                        if (isset($_POST['save'])){
                         
                          if($d4!=$d5){
                           echo '<span style="color:red;">Les deux mot de passe ne sont pas identique !</span>';
                          
                          }
                          else{
                         
                         echo '<span style="color:green;">Inscription effectuée avec succeés !</span>';
                         
                         }
         
                        }
                        
                      
                        ?>
                        
                      

                   
        </div>
                   

    </form>            

</body>

</html>
