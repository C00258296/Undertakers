<!DOCTYPE html>
<html>
<head>
<title>My website</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div id="container">
	<div class="logo">
		<img src="logo.png" width="50" alt="" title="">
	</div>	
	
	 <div class ="main">
		<input type="text"  name="box"   placeholder="Search... "> 
	 </div>
	 
		<div id="header">
			<h1>Undertakers</h1>
		</div>
				
		<div id="content">
		
		
		<input type="checkbox" name="" id="check">
	
				 <div class ="container2">
				  
				     <span class="top_line common"></span>
				     <span class="middle_line common"></span>
					  <span class="bottom_line common"></span>
				
				   <div class ="slide">
				     <h2>Navigation</h2><br>
					 <ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
					 </ul>
					</div>
				</div>
			</div>

			
            <form  action="" method="Post"> 
			<div id="main1">
			<h3>Add Funerals Details</h3>
			<br>
			<table class="center"></th>
           <div  class ="inputbox">
			<br>
			<table class="center"></th>
           <div  class ="inputbox">
<?php include'listbox.php';?>

<script>

function populate()
{
var sel = document.getElementById("listbox");
var result;
result = sel.options[sel.selectedIndex].value;
var employeeDetails = result.split(',');
document.getElementById("display").innerHTML="The Details of the selected person are:" + result; 
document.getElementById("delid").value = employeeDetails[0];
document.getElementById("delfirstname").value = employeeDetails[1];
document.getElementById("delsurname").value = employeeDetails[2];
document.getElementById("deladdress").value = employeeDetails[3];
document.getElementById("delemail").value = employeeDetails[4];
document.getElementById("delppsno").value = employeeDetails[5];
document.getElementById("deljob").value = employeeDetails[6]
document.getElementById("delphone").value = employeeDetails[7];
document.getElementById("delusername").value = employeeDetails[8];
}

function confirmCheck()
{
var response;
response = confirm ('Are you sure you want  to delete this person?');
if(response)
{
document.getElementById("delid").disabled = false;
document.getElementById("delfirstname").disabled = false;
document.getElementById("delsurname").disabled =  false;
document.getElementById("deladdress").disabled = false;
document.getElementById("delemail").disabled = false;
document.getElementById("delppsno").disabled = false;
document.getElementById("deljob").disabled = false;
document.getElementById("delphone").disabled = false;
document.getElementById("delusername").disabled = false;
return true;

}
else
{
populate()
return false;
}
}
</script>		   
          <p id="display"> </p>
          <form name="deleteForm" action="DeleteEmployee.php" onsubmit ="return confirmCheck()" method="post">
         <br><br>
         <tr><td><label for="delid"> Person Id</label></td><td>
         <input type ="text" name="delid" id="delid" disabled>
         <br><br>
         <tr><td><label for="delfirstname">First Name</label></td><td>
         <input type ="text" name="delfirstname" id="delfirstname" disabled>
          <br><br>
         <tr><td><label for ="delsurname">Surname</label></td><td>
         <input type ="text" name="delsurname" id="delsurname" disabled>
         <br><br>
         <tr><td><label for= "deladdress">Address </label></td><td>
         <input type ="text" name="deladdress" id="deladdress"  disabled>
          <br><br>
         <tr><td><label for= "delemail">Email </label></td><td>
         <input type ="text" name="delemail" id="delemail"  disabled>
          <br><br>
          <tr><td><label for ="delppsno">PPSNO </label></td><td>
          <input type ="text" name="delppsno" id="delppsno"  disabled>
          <br><br>
          <tr><td><label for ="deljob">Job</label></td><td>
          <input type ="text" name="deljob" id="deljob"  disabled>
          <br><br>
          <tr><td><label for ="delphone">Phone</label></td><td>
          <input type ="text" name="delphone" id="delphone"  disabled>
		  <br><br>
			  <tr><td><label for ="delusername">Username</label></td><td>
          <input type ="text" name="delusername" id="delusername"  disabled></tr><td>
		  <br><br><tr><td><tr><td>
          <input type = "submit" value="delete the record"></td></tr>


       <?php

   if(ISSET($_SESSION["EmployeeID"]))  { echo "<h1 class='myMessage'>Record deleted for".
    $_SESSION["Name"] . " " .$_SESSION["Surname"]."</h1>"  ;}
	session_destroy();
	
?>
		 
          
		   </form>
            
	      </div>
	  </div>
				
		
</body>

</html>
