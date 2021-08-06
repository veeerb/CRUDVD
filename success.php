<?php 
$title = 'Success';
require_once 'resources/header.php'; 
require_once 'db/conn.php';

if(isset($_POST['submit'])){
    //extract values from the $_POST array
    $lname = $_POST['lastname'];
    $fname = $_POST['firstname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    $specialty = $_POST['specialty'];
    //call function to insert and track if success or not
    $isSuccess = $crud->insertStudents($lname, $fname, $dob, $email, $contact, $specialty);

    if($isSuccess){
        include 'resources/successmessage.php ';
    }
    else{
        include 'resources/errormessage.php ';
    }
}
?>



<!--print out values that were passed to the action page using method="post"-->

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $_POST['lastname'] .', '. $_POST['firstname']; ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            <?php echo $_POST['specialty']; ?>
        </h6>
        <p class="card-text">Date Of Birth: <?php echo $_POST['dob']; ?></p>
        <p class="card-text">Email Address: <?php echo $_POST['email']; ?></p>
        <p class="card-text">Contact Number: <?php echo $_POST['phone']; ?></p>
        
        
    </div>
</div>


</br>
</br>
</br>
</br>
</br>
<?php require_once 'resources/footer.php'; ?>