<?php

    require_once 'db/conn.php';
    //get values from post operation

    if(isset($_POST['submit'])){
        //extract values from the $_POST array
        $id = $_POST['id'];
        $lname = $_POST['lastname'];
        $fname = $_POST['firstname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $specialty = $_POST['specialty'];

        //call crud function
        $result = $crud->editStudent($id, $lname, $fname, $dob, $email, $contact, $specialty);
        //redirect to index.php
        if($result){
            header("Location: viewrecords.php");
        }
        else{
            include 'resources/errormessage.php ';
        }
    }
    else{
        echo 'Something Error!';
    }




?>