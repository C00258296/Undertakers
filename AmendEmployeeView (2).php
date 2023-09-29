<?php

include"db.inc.php";
date_default_timezone_set("UTC");



$sql= "UPDATE Employee SET Name ='$_POST[amendname]', Surname='$_POST[amendsurname]',Address = '$_POST[amendaddress]' , 
Email ='$_POST[amendemail]' , PPSNo =' $_POST[amendppsno]',
Job = '$_POST[amendjob]' ,  Phone= '$_POST[amendphonenumber]' ,  Username ='$_POST[amendusername]'
WHERE EmployeeID ='$_POST[amendid]'";

echo "This is the ID: " . $_POST['amendid'] . 'for' .$_POST['amendname'];

if (! mysqli_query($con,$sql))
{
echo "Error ".mysqli_error($con);
}

else
{
    if(mysqli_affected_rows($con) !=0)
	{
	
	echo mysqli_affected_rows($con)."record(s) udpated <br>";
		echo "Employee Id ". $_POST['amendid'].", ".$_POST['amendname']
		."  ". $_POST['amendsurname']."has been udpated";
	
	}
	
	else
	{
	
	 echo"No records were changed";
	 
	}
}
mysqli_close($con);
?>


<form action ="ViewEmployee.html.php" method="post" />

<input type="submit" value="Return to Previous Screen">
</form>