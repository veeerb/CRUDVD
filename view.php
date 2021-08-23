<?php 
$title = 'View Records';

    require_once 'resources/header.php'; 
    require_once 'resources/auth_check.php';
    require_once 'db/conn.php';

    //get students by id
    if(!isset($_GET['id'])){
        echo "<h1 class='text-danger'>Something wrong! Please try again!</h1>";
        
       
    }
    else{
        $id =  $_GET['id'];
        $result = $crud->getStudentDetails($id);
    
    
    
?>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $result['lastname'] .', '. $result['firstname']; ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            <?php echo $result['name']; ?>
        </h6>
        <p class="card-text">
            Date Of Birth: <?php echo $result['dateofbirth']; ?>
        </p>
        <p class="card-text">
            Email Address: <?php echo $result['emailaddress']; ?>
        </p>
        <p class="card-text">
            Contact Number: <?php echo $result['contactnumber']; ?>
        </p>
        
        
    </div>
</div>
    </br>
    <a href="viewrecords.php" class="btn btn-info">Back</a>
    <a href="edit.php?id=<?php echo $result['student_id']; ?>" class="btn btn-warning">Edit</a>
    <a onclick ="return confirm('Do you want to delete this record?');" 
    href="delete.php?id=<?php echo $result['student_id']; ?>" class="btn btn-danger">Delete</a>   
<?php }?>

</br>
</br>
</br>
</br>
</br>
<?php require_once 'resources/footer.php'; ?>