<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Operations sur les fichiers</title>
    </head>

<body>
        
        <?php
        
        
        $file=fopen('Es.pep','r');
        $f1=fopen('yes.txt','w');
        
       

        
        while(!feof($file)) {
        
        $line=fgets($file);
        if( preg_match("#^>#",$line)){ 
                
                 echo "<br>";
                // On recupère le id du cds
               $search="#len[0-9]{2,}#";
               preg_match_all($search,$line,$out);
               foreach ($out[0] as $sortie)
                        $id_cds = $sortie;   
                        echo $id_cds."\t";
                        echo "\t";
                       // fwrite($f1,"\n");
                        fwrite($f1,$id_cds."\t");
                        
  
                }
                else {
                   
                  
                    
                }
        }
        fclose($file);
        fclose($f1);
    
        
        ?>
            
</body>

</html>