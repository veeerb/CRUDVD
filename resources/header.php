<?php 
  //include the session file. this file contains code that starts/resumes a session.
  //by having it in the header file, it will be include on every page, allowing session capability to be used on every page across the website.
  include 'resources/session.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="stylesheet" type="css/site.css">
    <title>CRUDVD - <?php echo $title ?></title>
  </head>
  <body>
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">QCU</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="viewrecords.php">View Students</a></li>
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <?php 
          if(!isset($_SESSION['userid'])){
 
        ?>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="login.php">Login</a></li>
        <?php  } else{ ?>

          <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><span>Hello <?php echo $_SESSION['username']; ?>! </span></a></li>
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="logout.php">Logout</a></li>
          <?php }?>
      </ul>
    </div>
    
    
    </div>
  
</nav>

</br>