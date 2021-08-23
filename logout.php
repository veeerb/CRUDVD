<?php

//this includes the session_start to resume the session on this page. it identifies the session but needs to be destroyed.

include 'resources/session.php'

?>

<?php
//session_destroy() destroy the session. then the header() function will redirect to the homepage
session_destroy();
header("Location: index.php");
?>