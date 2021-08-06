

<?php 
$title = 'Index';

    require_once 'resources/header.php'; 
    require_once 'db/conn.php';

    $results = $crud->getSpecialties();
?>
<!--

    - lastname
    - firtname
    - DOB(use datepicker)
    - specialty(Database Admin, Software Developer, Web Adminstration, other)
    - email address
    - contact number

-->
<h1 class="text-center">Registration Form</h1>

<form method="post" action="success.php">
    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input required type="text" class="form-control" id="lastname" name="lastname">
    </div></br>

    <div class="form-group">
        <label for="firstname">First Name</label>
        <input required type="text" class="form-control" id="firstname" name="firstname">
    </div></br>

    <div class="form-group">
        <label for="dob">Date Of Birth</label>
        <input type="text" class="form-control" id="dob" name="dob">
    </div></br>

    <div class="form-group">
        <label for="specialty">Type of Specialty</label>
        <select class="form-control" id="specialty" name="specialty">
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
            <option value= "<?php echo $r['specialty_id']?> "> <?php echo $r['name']; ?></option>
        <?php }?>
        </select>       
    </div></br>

    <div class="form-group">
        <label for="email">Email address:</label>
        <input required type="email" class="form-control" id="email" name="email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your
                email with anyone else.</small>
    </div></br>

    <div class="form-group">
            <label for="phone">Contact Number</label>
            <input type="text" class="form-control" id="phone"
            aria-describedby="phonehelp" name="phone">
            <small id="phoneHelp" class="form-text text-muted">We'll never share your
                number with anyone else.</small>
        </div></br>

    <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
    </form>   
</br>
</br>
</br>
</br>
</br>
<?php require_once 'resources/footer.php'; ?>