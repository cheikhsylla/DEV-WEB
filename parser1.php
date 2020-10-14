<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Operations sur les fichiers</title>
    </head>

<body>
        
        <?php
        
        
        $file=fopen('new_coli_pep.fa','r');
        $f1=fopen('new_coli_pep_parser.txt','w');
        
       

        
        while(!feof($file)) {
        
        $line=fgets($file);
        if( preg_match("#^>#",$line)){ 
                
                
                        fwrite($f1,"\n");
                        $ss = str_replace("\n","",$line);
                        fwrite($f1,$ss."\t");
                        
  //----------------------------------------------------------------------------------------------------------------              
                  
                }
                else {
                   
                   
                 $seq_fin = str_replace("\n","",$line); 

                 fwrite($f1,$seq_fin);
                    
                    
                }
        }
        fclose($file);
        fclose($f1);
       
        
        
        
        
        ?>
            
</body>

</html>