<?php


  try
  {
    //open the database
     $databaseConnection = new PDO('sqlite:phpsimplecms.sqlite3');
     $databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }
?>