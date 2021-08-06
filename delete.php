<?php 
$title = 'Delete';

    require_once 'resources/header.php'; 
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

</br>
</br>
</br>
</br>
</br>
<?php require_once 'resources/footer.php'; ?>