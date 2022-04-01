<?php
include '../controller/actions.php';
$action = new Action();


if (isset($_POST['state_code']) && isset($_POST['password']) ) {
    
    $stateCode = validate($_POST['state_code']);
    $password = validate($_POST['password']);

    $action->login($stateCode, $password);
}



?>