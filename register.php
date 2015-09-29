<?php 
    
    require_once  ("Includes/connectDB.php");
    include("Includes/header.php"); 
     
    if (isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "INSERT INTO users (username, password) VALUES ('".$username ."' , '".$password ."')";

        $rows = $databaseConnection->exec($query);  
      
        if ($rows == 1)
        {    
                $query = "SELECT id, username FROM users WHERE username = '".$username."'";
                $statement = $databaseConnection->prepare($query);
                $statement->execute();

                $result = $statement->fetchAll();
                $row_count = count ($result);

                foreach ($result as $m)
                {
        
                   $_SESSION['username'] =  $m['username'];           
                   $_SESSION['userid'] = $m['id'];
                }
         
            header ("Location: index.php");
        }
        else
        {
            echo "Failed registration";
        }
    }
?>
<div id="main">
    <h2>Register an account</h2>
        <form action="register.php" method="post">
            <fieldset>
                <legend>Register an account</legend>
                <ol>
                    <li>
                        <label for="username">Username:</label> 
                        <input type="text" name="username" value="" id="username" />
                    </li>
                    <li>
                        <label for="password">Password:</label>
                        <input type="password" name="password" value="" id="password" />
                    </li>
                </ol>
                <input type="submit" name="submit" value="Submit" />
                <p>
                    <a href="index.php">Cancel</a>
                </p>
            </fieldset>
        </form>
     </div>
</div> <!-- End of outer-wrapper which opens in header.php -->
<?php
    include ("Includes/footer.php");
?>