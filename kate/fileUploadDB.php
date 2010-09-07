<?php
 /* Script name: fileUpload.php
  * Description: Uploads a file via HTTP with a POST form. 
  */
  if(!isset($_POST['Upload']))	                          #5
  {
    include("uploadDB.inc");
  }
  else	                                                  #9
  {
    if($_FILES['pix']['tmp_name'] == "none")	           #11
    {
      echo "<p style='font-weight: bold'>
        File did not successfully upload. Check the 
            file size. File must be less than 500K.</p>";
      include("form_upload.inc");
      exit();
    }
    if(!preg_match("/image/",$_FILES['pix']['type']))	  #19
    {
      echo "<p style='font-weight: bold'>
        File is not a picture. Please try another 
            file.</p>";
      include("uploadDB.inc");
      exit();
    }
    else	                                               #27
    {
      include("dbstuff.inc");	                            
      $cxn = mysqli_connect($host,$user,$passwd,$dbname)
            or die ("couldn't connect to server");
	  
	  $name= $_FILES['pix']['name'];
      $destination= "images/galleries/" . $name;
      $temp_file = $_FILES['pix']['tmp_name'];

      $portfolio = $_POST["portfolio"];
      $alt = $_POST["alt"];

      move_uploaded_file($temp_file,$destination);
      echo "<p style='font-weight: bold'>
        The file has successfully uploaded:
            {$_FILES['pix']['name']} 
            ({$_FILES['pix']['size']})</p>"; 
      $insert = "INSERT INTO pics (name, portfolio, alt)
	 VALUES ('$name', '$portfolio', '$alt')";

      $add_member = mysqli_query($cxn, $insert);
    }
  }
?>
