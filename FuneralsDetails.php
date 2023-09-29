<?php
include 'db.inc.php' ;
date_default_timezone_set("UTC");
echo "The furenal details sent down are : <br>";

echo"Name is: " .$_POST['name'] ."<br>";
echo "DOB is : " . $_POST['dob']. "<br>";
echo "DOD is : " . $_POST['dod']. "<br>";
echo "Address is : " . $_POST['address']. "<br>";
echo "DODTime is : " . $_POST['dodtime']. "<br>";
echo "CustomerID is : " . $_POST['customerid']. "<br>";
echo "Completed is : " . $_POST['completed']. "<br>";



$sql = "Insert into FuneralDetails (Name,DOB,DOD,Address,DODTime,CustomerID,Completed)
VALUES ('$_POST[name] ',' $_POST[dob]',' $_POST[dod] ',' $_POST[address] ',' $_POST[dodtime]',' $_POST[customerid] ','$_POST[completed]')" ;

if(!mysqli_query($con,$sql))
{
die ("An Error in the SQL Query : " .mysqli_error($con) );
}

echo"<br> A record has been added for : " . $_POST['name'] . " " . $_POST['dob'] . " " . $_POST['dod']. " " . $_POST['address'] .""  . $_POST['dodtime'] ."" . $_POST['customerid'] ." " . $_POST['completed']  ."";

mysqli_close($con);
?>
<form action = "FuneralsDetails.html.php" method = "POST" >
<br>

  <input type="submit" value="Return to Insert Page"/>
  
  </form>