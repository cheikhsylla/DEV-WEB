<?php
      $hostname="localhost";
      $username="root";
      $password="root";
      $databasename="ODS_DB";
      
      $connect  = mysqli_connect($hostname,$username,$password,$databasename);
      $query=("SELECT * FROM seqinconnue");
          
          $result1=mysqli_query($connect,$query);
          
          
          ?>