<?php  
     include 'Model/db_config.php';

     $name="";
     $err_name="";
     $err_db="";

     $hasError = false;

     if(isset($_POST["Submit"]))
     {
          if(empty($_POST["text"]))
          {
               $err_name="Name Required";
            $hasError = true;
          }

          else
          {
               $name=$_POST["text"];
          }

          //Database

          if(!$hasError)
          {
               $rs= insertCategory("$name");
               var_dump($rs);
               /*if($rs===true)
               {
                    header("Location: AllCategories.php");
               }*/

          }
     }

     
     function insertCategory($name)
     {
          $query="INSERT INTO category VALUES(NULL,'$name')";
          return execute($query);
     }

     function allCategories()
     {
          $query= "select * from category";
          return $rs= get($query);
     }

?>