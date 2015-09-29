    <?php 

ini_set('display_errors','1');

        require_once  ("Includes/connectDB.php");
        include("Includes/header.php");         

     ?>


    <div id="main">
    <h3>Get started with your PHP website</h3>

    <ol class="round">
        <li class="one">
            <h5>Login  </h5>
          Click on <a href="register.php">Register</a> to create a new user<br/>
          Default username: admin, password: admin
        </li>
        <li class="two">
            <h5>Getting Started</h5>
            <a href="https://azure.microsoft.com/en-us/services/web-sites/"> Azure Web Sites</a> is a fully managed Platform-as-a-Service offering that enables you to deploy and scale Web Apps in seconds. Focus on your application code, and let Azure take care of the infrastructure to scale and securely run it for you.
         </li>
        <li class="asterisk">
            <div class="visit">
             
            </div>
         </li>
    </ol>


    </div>

</div> <!-- End of outer-wrapper which opens in header.php -->

<?php 


    include ("Includes/footer.php");
 ?>