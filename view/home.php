<?php

include('header.php');

?>
    <section>
        <div class="container pt-5">
            <h2>welcome to the official website of the National Population Commission</h2>
            <p> National Population Commission is a principal commission of Nigeria, responsible for <br> producing data about the Nigerian people and economy</p>
        </div>
    </section>

    <section>
        <div class="container">
            <h2>Login</h2>
            <form method="post" action="../model/login.php">
                <div class="mb-3 mt-3">
                    <label for="text">NYSC State Code:</label>
                    <input type="text" required class="form-control" id="statecode" placeholder="Enter NYSC State code" name="state_code">
                </div>
                <div class="mb-3">
                    <label for="password">Password:</label>
                    <input type="password" required class="form-control" id="password" placeholder="Enter password" name="password">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <p class="text-secondary">Don't have have an account? <a href="register.php">Register here</a></p>
        </div>
    </section>


<?php

include('footer.php');

?>