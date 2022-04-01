<?php
include '../controller/actions.php';
$action = new Action();

if(isset($_POST['submitbtn_state'])){

    $name = validate($_POST['name']);
    $action->createState($name);

}

if(isset($_POST['submitbtn_lga'])){
    $name = validate($_POST['name']);
    $state = validate($_POST['state']);

    $action->createLga($name, $state);

}

if(isset($_POST['submitbtn_ward'])){
    $name = validate($_POST['name']);
    $lga = validate($_POST['lga']);

    $action->createWard($name,$lga);

}

if(isset($_POST['submitbtn_ctz'])){
    $name = validate($_POST['name']);
    $gender = validate($_POST['gender']);
    $phone = validate($_POST['phone']);
    $address = validate($_POST['address']);
    $ward = validate($_POST['ward']);

    $action->createCitizen($name, $gender, $phone, $address, $ward);

}


?>