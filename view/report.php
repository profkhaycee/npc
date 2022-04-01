<?php

include 'header.php';
include '../controller/actions.php';
$action = new Action();

?>

<section class="container mt-5">

    <h1 class="text-secondary">Generate Report</h1>
    <form action="report.php" method="post">
        
        <div class="mb-3 mt-3">
            <label for="text">Select report:</label>
            <select required class="form-control" id="state"  name="report">
                <option value="">-select-</option>
                <option value="states">State</option>
                <option value="lga">LGA</option>
                <option value="wards">Wards</option>
                <option value="citizens">Citizen</option>
                <option value="users">Users</option>
                
            </select>
        </div>
        <button type="submit"  id="submitbtn" name="submitbtn" class="btn btn-primary">Submit</button>

    </form>



</section>

<?php


if(isset($_POST['submitbtn'])){
    $report = $_POST['report'];

    if($report == 'states' || $report == 'lga' || $report == 'wards' ){
        $action->Report($report);
    }
    elseif($report == 'citizens'){
        $action->citizenReport($report);

    }
    elseif($report == 'users'){
        $action->userReport($report);

    }
}


include 'footer.php';

?>

