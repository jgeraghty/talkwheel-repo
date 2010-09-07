<?php
 /* Script name: display.php
  */
      include("dbstuff.inc");	                            
      $cxn = mysqli_connect($host,$user,$passwd,$dbname)
            or die ("couldn't connect to server");

  $query = "SELECT name, alt FROM pics";

  $result = mysqli_query($cxn,$query)
            or die ("Couldn't execute query.");
  $n_row = mysqli_num_rows($result);
  if($n_row < 1) // if login unsuccessful	               #14
  {
    $message = "<p>There are no Pictures in this portfolio</p>";
    extract($_POST);
    exit();
  }
  else //if login successful	                           #48
  {

    while($row=mysqli_fetch_array($result, MYSQLI_NUM)){
      echo "<img src='" . $row[0] . "' alt='" . $row[1] . "' />";
    }
    
  }
    
?>