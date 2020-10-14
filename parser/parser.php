<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Operations sur les fichiers</title>
    </head>

<body>
        
        <?php
        
        
        $file=fopen('E1.fa','r');
        $f1=fopen('E1.txt','w');
        
       

        
        while(!feof($file)) {
        
        $line=fgets($file);
        if( preg_match("#^>#",$line)){ 
                
                 echo "<br>";
                // On recupère le id du cds
               $search="#[A-Z]{3}[0-9]{5}#";
               preg_match_all($search,$line,$out);
               foreach ($out[0] as $sortie)
                        $id_cds = $sortie;   
                        echo $id_cds."\t";
                        echo "\t";
                        fwrite($f1,"\n");
                        fwrite($f1,$id_cds."\t");
                        
  //----------------------------------------------------------------------------------------------------------------              
                  //  la taille de séquence
                  
                $search1="#:[0-9]{3,}:#";
               preg_match_all($search1,$line,$out);
               foreach ($out[0] as $sortie)
                        
                        $id = $sortie;   
                       // echo $id.'<br>';
                        
                        
                 preg_match_all("#[0-9]{3,}#",$id,$out);
               
                foreach ($out[0] as $sortie)
                        
                        $ac = $sortie;   
                       echo $ac."\t";
                       fwrite($f1,$ac."\t");
                        
                        
                         $search2="#:[0-9]{3,}#";
               preg_match_all($search2,$line,$out);
               
               foreach ($out[0] as $sortie)
                        
                        $aa = $sortie;   
                       //echo $aa."\t";
                        
                        
            preg_match_all("#[0-9]{3,}#",$aa,$out);
               
                foreach ($out[0] as $sortie)
                        
                        $ab = $sortie;   
                        echo $ab."\t";
                        fwrite($f1,$ab."\t");
                        
                        
               
                // Fin taille de la séquence
 //----------------------------------------------------------------------------------------------------------------               
                $taille_seq= ($ab-$ac)+1;
                echo $taille_seq."\t";
                fwrite($f1,$taille_seq."\t");
 //----------------------------------------------------------------------------------------------------------------               
             
            //gene
              $search3="#gene:[a-zA-Z][_]?[a-zA-Z]?[0-9]{3,}#";
               preg_match_all($search3,$line,$out);
               
               foreach ($out[0] as $sortie)
                        
                        $ar = $sortie;   
                       //echo $ar."\t";
                       preg_match_all("#[a-zA-Z][_]?[a-zA-Z]?[0-9]{3,}#",$ar,$out);
               
                foreach ($out[0] as $sortie)
                        
                        $arr = $sortie;   
                        echo $arr."\t";
                        fwrite($f1,$arr."\t");
                        
    // ---------------------------------------------------------orientation brin ----------------------------------------------
    
               
               $search4="#:[-]?[1]{1}#";
               preg_match_all($search4,$line,$out);
               
               foreach ($out[0] as $sortie)
                        
                        $sens = $sortie;   
                       //echo $sens."\t";
                        preg_match_all("#[-]?[1]{1}#",$sens,$out);
               
                foreach ($out[0] as $sortie)
                        
                        $sens1 = $sortie;   
                        echo $sens1."\t";
                        fwrite($f1,$sens1."\t");
                       
               
               
               
               
               
               
               
  //-------------------------------------------------------------------------------------------------------------              
                
            // Description du CDS
            
             preg_match_all("#description:(.){1,}#",$line,$out);
               
                foreach ($out[0] as $sortie)
                        
                        $desc = $sortie;   
                        //echo $desc.'<br>';
                        
                        
                $desc=str_replace( "description:", " ", $desc);
               echo $desc."\t";
               fwrite($f1,$desc."\t");
               
//----------------------------------------------------------------------------------------------------------------              
                
            
            // Affichage de la séquence
                }
                else {
                   
                   $seq=$line;
                 $seq_fin = str_replace("\n","",$line); 

                 fwrite($f1,$seq_fin);
                    
                    
                }
        }
        fclose($file);
        fclose($f1);
       
        
        
        
        
        ?>
            
</body>

</html>