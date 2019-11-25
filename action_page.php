<?php
if($_POST['submit'] == "Submit")
{
   $varFirstName = $_POST['firstName'];
   $varLastName = $_POST['lastName'];
   $varGender = $_POST['gender'];
   $varEmail = $_POST['email'];
   $varPhone = $_POST['phone'];
   $varCarType = $_POST['carType'];
   $varNumber = $_POST['numberCar'];
   $varText = $_POST['text'];
   $errorMessage = "";
}
if($errorMessage != "")
{
  echo("<p>There was an error:</p>\n");
  echo("<ul>" . $errorMessage . "</ul>\n");
}
else
{
  $fs = fopen("mydata.csv","a");
  fwrite($fs,$varFirName . ", " . $varLastName . ", " . $varGender . ", " . $varEmail . ", " . $varPhone . "\n");
  fclose($fs);
  header("Location: thankyou.html");
  exit;
}

?>
