<?php

include 'header.php'

?>

<section>
        <div class="container mt-5 bg-gray pb-5">
            <h2>Register</h2>
            <p class='text-danger'><strong>NB: <i>Only corpers are allowed to register</i><strong></p>
            <form method="post" action="../model/register.php">
                <div class="mb-3 mt-3">
                    <label for="text">Name:</label>
                    <input type="text" required class="form-control" id="name" placeholder="Enter fullname" name="name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="text">Email:</label>
                    <input type="email" required class="form-control" id="email" placeholder="Enter Email Address" name="email">
                </div>
                <div class="mb-3 mt-3">
                    <label for="text">NYSC State Code:</label>
                    <input type="text" required class="form-control" id="statecode" placeholder="Enter NYSC State code" name="state_code">
                </div>
                <div class="mb-3">
                    <label for="password">Password:</label>
                    <input type="password" required minlength="8" class="form-control" id="password" placeholder="Enter password" name="password">
                </div>
                <div class="mb-3">
                    <label for="conf-pwd">Confirm Password:</label>
                    <input type="password" required class="form-control" id="conf-pwd" placeholder="confirm password" name="password2">
                </div>
                <p id='valid-msg'></p>
                
                <button type="submit"  id="submitbtn" name="submitbtn" class="btn btn-primary">Submit</button>
            </form>
        </div>
</section>

<script>
    $(document).ready(()=>{
        $('#conf-pwd').keyup(()=>{
            if($('#password').val() == $('#conf-pwd').val() ){
                $('#valid-msg').html("<span class='text-success'>Password Match <i class='fa fa-thumbs-up text-success' style='font-size:24px'</span>")
                $('#submitbtn').attr('disabled',false)

            }else{
                $('#submitbtn').attr('disabled','disabled')
                $('#valid-msg').html("<span class='text-danger'>Password does not Match <i class='fa fa-times-rectangle text-danger' style='font-size:24px'></i></span>")
            }
        })
    })

</script>

<?php

include 'footer.php'

?>


