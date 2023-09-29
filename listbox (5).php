<?php

include"db.inc.php";
date_default_timezone_set("UTC");

$sql = "SELECT EmployeeID , Name, Surname , Address ,Email ,PPSNo, Job ,Phone ,Username from Employee where DeletedFlag = 0 ";


if (!$result  =  mysqli_query($con,$sql))
{
die ('Error in querrying  the database'.mysqli_error($con));
}

echo "<br><select name ='listbox' id = 'listbox' onclick = 'populate() '>";

while ($row = mysqli_fetch_array($result))
{

$id = $row['EmployeeID'];
$fname = $row['Name'];
$sname= $row['Surname'];
$address= $row['Address'];
$email=$row['Email'];
$ppsno= $row['PPSNo'];
$ejob= $row['Job'];
$pnumber=$row['Phone'];
$username=$row['Username'];
$allText="$id,$fname,$sname,$address,$email,$ppsno,$ejob,$pnumber,$username";
echo "<option value = '$allText'>$fname $sname</option>";

}

echo "</select>";
mysqli_close($con);

?>
