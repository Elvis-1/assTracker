<?php
// data source name -- dsn
$dsn = 'mysql:host=localhost;dbname=assignment_tracker';
$username = 'root';

try{
    $db = new PDO($dsn,$username);
    //echo 'working';
}catch(PDOException $er){
    $error = 'Database Error';
    $error = $er->getMessage();
    include 'view/error.php';
    exit();

}






