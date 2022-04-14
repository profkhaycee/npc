<?php
include '../controller/actions.php';
$action = new Action();


if(isset($_POST['submitbtn'])){
    
    $stateCode = validate($_POST['state_code']);
    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $pwd = $_POST['password'];
    $password = password_hash($pwd, PASSWORD_DEFAULT);


    $action->registerUser($stateCode, $name, $email, $password);
}



?>
