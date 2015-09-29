<?php
    session_start();
    require_once  ("Includes/connectDB.php");

    function logged_on()
    {
        return isset($_SESSION['userid']);
    }

    function confirm_is_admin() {
        if (!logged_on())
        {
            header ("Location: logon.php");
        }

        if (!is_admin())
        {
            header ("Location: index.php");
        }
    }

    function is_admin()
    {
        global $databaseConnection;
        $user = $_SESSION['userid'] ;
        $query = "SELECT user_id FROM users_in_roles UIR INNER JOIN roles R on UIR.role_id = R.id WHERE R.name = 'admin' AND UIR.user_id = ".$user." LIMIT 1";
        $result = $databaseConnection->query($query);     
        $row = $result->fetch();
        $row_count = count ($row);
        return $row_count == 1;
    }

       ?>