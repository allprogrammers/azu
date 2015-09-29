<?php 
    
    require_once  ("Includes/connectDB.php");
    include("Includes/header.php"); 
?>

<div id="main">
    <?php
        $pageid = $_GET['pageid'];
        $query = 'SELECT menulabel, content FROM pages WHERE id = ".$pageid."  LIMIT 1';
        $statement = $databaseConnection->query($query);
        $row = $result->fetch();
        $row_count = count ($row);

        if ($row_count == 1)
        {

            echo "<h2>$row['menulabel']</h2> $row['content']";
        }
        else
        {
            echo 'Page Not Found';
        }
    ?>
</div>
</div> <!-- End of outer-wrapper which opens in header.php -->
<?php 
    include ("Includes/footer.php");
 ?>