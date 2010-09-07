<?php
 /* Script name: galleries.php
  */
      include("dbstuff.inc");	                            
      $cxn = mysqli_connect($host,$user,$passwd,$dbname)
            or die ("couldn't connect to server");

  $location=$_GET['gallery'];
  $query = "SELECT name alt FROM pics WHERE portfolio='". $location . "' ORDER BY imageNUM";

  $result = mysqli_query($cxn,$query)
            or die ("Couldn't execute query.");
  $n_row = mysqli_num_rows($result);
  //$location="people";

  if($n_row < 1) // if login unsuccessful
  {
    $message = "<p>There are no Pictures in this portfolio</p>";
    extract($_POST);
    exit();
  }
  else //if login successful
  {
	$i=0;
	$num=0;
    while($row=mysqli_fetch_array($result, MYSQLI_NUM)){
		$num=$i+1;
      $bigpics[$i] = "<img alt='" . $row[1] . "' class='hide image" . $num . "' src='images/galleries/" . $row[0] . "' />";
	  #ImageCopyResampled("images/" . $location . "/" . $row[0], "images/" . $location . "/thumb" . $row[0], 0,0, 200, 200, 40,40
      $thumbs[$i] ="<div class='blackdiv images" . $num . "' title='images" . $num . "'> <img  width= '40' alt='" . $row[1] . "' class='black hide images" . $num . "' title='image" . $num . "' src='images/galleries/thumb" . $row[0] . "' /></div>";
		$i++;
    } 
  }  
include("portfolio.inc");
?>