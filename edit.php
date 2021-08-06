!

<?php 
$title = 'Edit Records';

    require_once 'resources/header.php'; 
    require_once 'db/conn.php';

    $results = $crud->getSpecialties();

    if(!isset($_GET['id'])){

        //echo error
       include 'resources/errormessage.php ';
       header("Location: viewrecords.php");

    }
     else {
        $id = $_GET['id'];
        $student = $crud->getStudentDetails($id);

    

   

?>

    <h1 class="text-center">Edit Records</h1>

    <form method="post" action="editpost.php">
        <input type="hidden" name ="id" value = "<?php echo $student['student_id'] ?>" />
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" value ="<?php echo $student['lastname'] ?>" id="lastname" name="lastname">
        </div></br>

        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" value ="<?php echo $student['firstname'] ?>" id="firstname" name="firstname">
        </div></br>

        <div class="form-group">
            <label for="dob">Date Of Birth</label>
            <input type="text" class="form-control" value ="<?php echo $student['dateofbirth'] ?>" id="dob" name="dob">
        </div></br>

        <div class="form-group">
            <label for="specialty">Type of Specialty</label>
            <select class="form-control" id="specialty" name="specialty">
            <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                <option value= "<?php echo $r['specialty_id']?>" <?php if($r['specialty_id']        
                == $student['specialty_id']) echo 'selected' ?>> 
                     <?php echo $r['name']; ?>
            </option>
            <?php }?>
            </select>       
        </div></br>

        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" value ="<?php echo $student['emailaddress'] ?>" id="email" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your
                    email with anyone else.</small>
        </div></br>

        <div class="form-group">
                <label for="phone">Contact Number</label>
                <input type="text" class="form-control" value ="<?php echo $student['contactnumber'] ?>" id="phone"
                aria-describedby="phonehelp" name="phone">
                <small id="phoneHelp" class="form-text text-muted">We'll never share your
                    number with anyone else.</small>
            </div></br>

        <button type="submit" name="submit" class="btn btn-success btn-block">Update</button>
        </form>   

        <?php }?>
</br>
</br>
</br>
</br>
</br>
<?php require_once 'resources/footer.php'; ?>