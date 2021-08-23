<?php 
    $host = 'localhost';
    $db = 'crudvd_db';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4'; 

//     remote database connection
//    $host = 'remotemysql.com';
//     $db = 'pIpKS7Wd6j';
//     $user = 'pIpKS7Wd6j';
//     $pass = 'nrq1KyJzCN';
//     $charset = 'utf8mb4'; 
    
  
    $dsn = "mysql:host=$host;dbname=$db;chartset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }


    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);

    $user->insertUser("admin","admin");
?>