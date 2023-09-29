
<?php
include 'db.inc.php' ;
date_default_timezone_set("UTC");
echo "The details sent down are : <br>";

echo"First Name is: " .$_POST['name'] ."<br>";
echo "Surname is : " . $_POST['surname']. "<br>";
echo "Address is : " . $_POST['address']. "<br>";
echo "Email is : " . $_POST['email']. "<br>";
echo "PPSNO is : " . $_POST['ppsno']. "<br>";
echo "JOB is : " . $_POST['job']. "<br>";
echo "Phone is : " . $_POST['phonenumber']. "<br>";
echo "Username is : " . $_POST['username']. "<br>";



$sql = "Insert into Employee (Name,Surname,Address,Email,PPSNo,Job,Phone,Username)
VALUES ('$_POST[name] ',' $_POST[surname]',' $_POST[address] ',' $_POST[email] ',' $_POST[ppsno]',' $_POST[job] ','$_POST[phonenumber]','$_POST[username]')" ;

if(!mysqli_query($con,$sql))
{
die ("An Error in the SQL Query : " .mysqli_error($con) );
}

echo"<br> A record has been added for : " . $_POST['name'] . " " . $_POST['surname'] . " " . $_POST['email']. " " . $_POST['phonenumber'] .""  . $_POST['address'] ."" . $_POST['ppsno'] ." " . $_POST['job'] ." ". $_POST['username'] ."";

mysqli_close($con);
?>
<form action = "AddEmployee.html.php" method = "POST" >
<br>

  <input type="submit" value="Return to Insert Page"/>
  
  </form>