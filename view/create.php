<?php

include 'header.php';
include '../controller/actions.php';
$action = new Action();

?>

<section class="container mt-5">

<div class="row">

    <div class='col-md-3'>
        <div class="card" >
            <div class="card-body">
                <h4 class="card-title">Create State</h4>
                <a href="#state-modal" data-bs-toggle="modal"  class="btn btn-primary">ADD</a>
            </div>
        </div>
    </div>

    <div class='col-md-3'>
        <div class="card" >
            <div class="card-body">
                <h4 class="card-title">Create LGA</h4>
                <a href="#lga-modal" data-bs-toggle="modal" class="btn btn-primary">ADD</a>
            </div>
        </div>
    </div>

    <div class='col-md-3'>
        <div class="card" >
            <div class="card-body">
                <h4 class="card-title">Create WARD</h4>
                <a href="#ward-modal" data-bs-toggle="modal" class="btn btn-primary">ADD</a>
            </div>
        </div>
    </div>

    <div class='col-md-3'>
        <div class="card" >
            <div class="card-body">
                <h4 class="card-title">Create CITIZEN</h4>
                <a href="#citizen-modal" data-bs-toggle="modal" class="btn btn-primary">ADD</a>
            </div>
        </div>
    </div>
</div>    

<div class=""><a href="report.php" class="btn btn-success"> VIEW REPORT</a>
</div>
</section>

<!-- MODALS -->
<div class="modal fade" id="state-modal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">create new state</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
            <form action="../model/create.php" method="post">
                <div class="mb-3 mt-3">
                    <label for="text">Name:</label>
                    <input type="text" required class="form-control" id="name" placeholder="Enter name of state" name="name">
                </div>
                <button type="submit"  id="submitbtn-state" name="submitbtn_state" class="btn btn-primary">Submit</button>

            </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="lga-modal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">create new LGA</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
            <form action="../model/create.php" method="post">
                <div class="mb-3 mt-3">
                    <label for="text">Name:</label>
                    <input type="text" required class="form-control" id="name" placeholder="Enter name of LGA" name="name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="text">STATE:</label>
                    <select required class="form-control" id="state" placeholder="Enter name of LGA" name="state">
                        <option value="">select states</option>
                        <?php  echo $action->fetchAll('states'); ?>
                        
                    </select>
                </div>
                <button type="submit"  id="submitbtn-lga" name="submitbtn_lga" class="btn btn-primary">Submit</button>

            </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="ward-modal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">create new Ward</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
            <form action="../model/create.php" method="post">
                <div class="mb-3 mt-3">
                    <label for="text">Name:</label>
                    <input type="text" required class="form-control" id="name" placeholder="Enter name of ward" name="name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="text">LGA:</label>
                    <select required class="form-control" id="state" placeholder="Enter name of LGA" name="lga">
                        <option value="">select LGA</option>
                        <?php  echo $action->fetchAll('lga'); ?>
                    </select>
                </div>
                <button type="submit"  id="submitbtn-ward" name="submitbtn_ward" class="btn btn-primary">Submit</button>

            </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="citizen-modal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">create new Citizen</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
            <form action="../model/create.php" method="post">
                <div class="mb-3 mt-3">
                    <label for="text">Name:</label>
                    <input type="text" required class="form-control" id="name" placeholder="Enter name of fullname" name="name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="text">Gender:</label>
                    <select required class="form-control" id="state"  name="gender">
                        <option value="">select gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="mb-3 mt-3">
                    <label for="phone">Phone:</label>
                    <input type="tel" required class="form-control" maxlength="11" minlength="11" id="phone" placeholder="Enter phone number" name="phone">
                </div>
                <div class="mb-3 mt-3">
                    <label for="text">Address:</label>
                    <input type="text" required class="form-control" id="name" placeholder="Enter  Address" name="address">
                </div>
                <div class="mb-3 mt-3">
                    <label for="text">Ward:</label>
                    <select required class="form-control" id="state"  name="ward">
                        <option value="">select Ward</option>
                        <?php  echo $action->fetchAll('wards'); ?>
                      
                    </select>
                </div>
                <button type="submit"  id="submitbtn-ctz" name="submitbtn_ctz" class="btn btn-primary">Submit</button>

            </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<?php

include 'footer.php'

?>

