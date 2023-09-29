<?php 
    session_start();
	
?>
<?php 
include'db.inc.php';

$sql ="UPDATE Employee SET deletedflag =  true WHERE EmployeeID = '$_POST[delid]'";
//$sql =2 delete from employee where = '$_POST[delid]'"

if(! mysqli_query($con,$sql))
{
echo "Error ".mysqli_query($con);
}
// set sessions variables
$SESSION["EmployeeID"] =$_POST['delid'];
$SESSION["Name"] =$_POST['delfirstname'];
$SESSION["Surname"] =$_POST['delsurname'];
$SESSION["Address"] =$_POST['deladdress'];
$SESSION["Email"] =$_POST['delemail'];
$SESSION["PPSNo"] =$_POST['delppsno'];
$SESSION["JOB"] =$_POST['deljob'];
$SESSION["Phone"] =$_POST['delphone'];
$SESSION["Username"] =$_POST['delusername'];


mysqli_close($con);
//header('Location :DeleteEmployee.html.php' );
//exit();
?>
<script>

window.location ="DeleteEmployee.html.php"
</script>