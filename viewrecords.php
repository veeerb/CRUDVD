<?php 
$title = 'View Records';

    require_once 'resources/header.php'; 
    require_once 'db/conn.php';

    //get all students
    $results = $crud->getStudents();
?>

    <table class="table">

    <tr>
        <th>ID</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Specialty</th>
        <th>Actions</th>
    </tr>

   <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
   <tr>
       <td><?php echo $r['student_id']; ?> </td>
       <td><?php echo $r['lastname']; ?></td>
       <td><?php echo $r['firstname']; ?></td>
       <td><?php echo $r['name']; ?></td>
       <td>
           <a href="view.php?id=<?php echo $r['student_id']; ?>" class="btn btn-primary">View</a>
           <a href="edit.php?id=<?php echo $r['student_id']; ?>" class="btn btn-warning">Edit</a>
           <a onclick ="return confirm('Do you want to delete this record?');" 
           href="delete.php?id=<?php echo $r['student_id']; ?>" class="btn btn-danger">Delete</a>
        </td>
   </tr>
   <?php }?>
    
    </table>

</br>
</br>
</br>
</br>
</br>
<?php require_once 'resources/footer.php'; ?>