<?php 

    require_once 'resources/auth_check.php';
    require_once 'db/conn.php';

   if(!isset($_GET['id'])){
       include 'resources/errormessage.php ';
       header("Location: viewrecords.php");
   } else{
       //get id values
       $id = $_GET['id'];

       //call delete function
       $result = $crud->deleteStudent($id);
       
       //redirect to list
       if($result){

           header("Location: viewrecords.php");
           
       } else{

        include 'resources/errormessage.php ';

       }
   }
?>
