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
          <li><a href="visualisation.php"> VISUALISATION DES GENOMES  </a></li>
          <li><a href="recherche.php"> RECHERCHER</a></li>
          <li><a href="alignement.php"> ALIGEMENT DE SEQUNECES </a></li>
           <li><a href="dejaannote.php"> SEQUNECES ANNOTEES </a></li>
          <li><a href="annotation.php"> ANNOTATION </a></li>
          <li><a href="forum.php"> FORUM</a></li> 
          <li><a href="inscription.php"> S'INSCRIRE </a></li>
           
            
        </form>
           
           <li><br><a href="contacter.php"> NOUS CONTACTER ! </a></li><br>
           <!---<logo d'université en bas de la page>--->
           <img src="logopsud.jpg" align="center" border="0" width="200" >

<br>
<?php
$date = date("d-m-Y");
$heure = date("H:i");
Print(" $date $heure");
?>
             <img src="ps.png" align="center" border="0" width="210" >
      </ul>
     
   <div class="zone_texte">
            <h2>Vous pouvez faire  l'alignement dans nos base de données il suffit de renseigner votre séquence protéique en input. <h2>
            <br>
            <br>
                  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data" >
                   
                       <p>
                       <input type="file" name="fichier" size="30">
                       <input type="submit" name="upload" value="Search">
                       </p>

                        </form>
                  
              <a><?php echo( "<button onclick= \"location.href='locBLAST'\">More</button>");?></a>
                     <?php
                     
if( isset($_POST['upload']) ) // si formulaire soumis
{
    $content_dir = '/Applications/MAMP/htdocs/Projet/parser/'; // dossier où sera déplacé le fichier

    $tmp_file = $_FILES['fichier']['tmp_name'];

    if( !is_uploaded_file($tmp_file) )
    {
        exit("Le fichier est introuvable");
    }

   

    // on copie le fichier dans le dossier de destination
    $name_file = $_FILES['fichier']['name'];

    if( !move_uploaded_file($tmp_file, $content_dir . $name_file) )
    {
        exit("Impossible de copier le fichier dans $content_dir");
    }

    echo "Résultats de l'alignement";
     $cmd="/Applications/MAMP/htdocs/Projet/bin/blastp -query /Applications/MAMP/htdocs/Projet/parser/$name_file -db /Applications/MAMP/htdocs/Projet/parser/Escherichia_coli -outfmt '7 qseqid sseqid qlen slen length pident evalue'";
                     $output = shell_exec("$cmd");
                     echo "<pre>$output</pre>";
}
                     
                     
                     
                     
                       
                     
                     ?> 
    
 
      </div>
 
 
</body>

</html>
