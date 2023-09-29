<!DOCTYPE html>
<html>
<head>
<title>My website</title>
<link rel="stylesheet" type="text/css" href="styleE.css" />
</head>

<body>

<div id="container">
	<div class="logo">
		<img src="logo.png" width="50" alt="" title="">
	</div>	
	
	 <div class ="main">
		<input type="text"  name="box"   placeholder="Search... "> 
	 </div>
	 
<script>
function populate()
{

var sel = document.getElementById("listbox");
var result;
result =sel.options[sel.selectedIndex].value;
var employeeDetails = result.split(',');
document.getElementById("display").innerHTML = "The details of the selected employee are: " + result; 
document.getElementById("amendid").value = employeeDetails[0];
document.getElementById("amendname").value = employeeDetails[1];
document.getElementById("amendsurname").value = employeeDetails[2];
document.getElementById("amendaddress").value = employeeDetails[3];
document.getElementById("amendemail").value = employeeDetails[4];
document.getElementById("amendppsno").value = employeeDetails[5];
document.getElementById("amendjob").value = employeeDetails[6];
document.getElementById("amendphonenumber").value = employeeDetails[7];
document.getElementById("amendusername").value = employeeDetails[8];

}

function toggleLock()
{
	if (document.getElementById("amendViewbutton").value =="Amend Details")
	{
		document.getElementById("amendname").disabled =false;
		document.getElementById("amendsurname").disabled =false;
		document.getElementById("amendaddress").disabled =false;
		document.getElementById("amendemail").disabled =false;
		document.getElementById("amendppsno").disabled =false;
        document.getElementById("amendjob").disabled =false;
		document.getElementById("amendphonenumber").disabled=false;
		document.getElementById("amendusername").disabled=false;
		document.getElementById("amendViewbutton").value ="View Details";
		
	}
	else
	{
		
		document.getElementById("amendname").disabled =true;
		document.getElementById("amendsurname").disabled =true;
		document.getElementById("amendaddress").disabled =true;
		document.getElementById("amendemail").disabled =true;
		document.getElementById("amendppsno").disabled =true;
        document.getElementById("amendjob").disabled =true;
		document.getElementById("amendphonenumber").disabled=true;
		document.getElementById("amendusername").disabled=true;
		document.getElementById("amendViewbutton").value ="Amend Details";
}
}

function confirmCheck()
{
	var response;
	response = confirm('Are you sure you want to save these changes?');
	if(response)
	{
		document.getElementById("amendid").disabled =false;
		document.getElementById("amendname").disabled =false;
		document.getElementById("amendsurname").disabled =false;
		document.getElementById("amendaddress").disabled =false;
		document.getElementById("amendemail").disabled =false;
		document.getElementById("amendppsno").disabled =false;
        document.getElementById("amendjob").disabled =false;
		document.getElementById("amendphonenumber").disabled=false;
		document.getElementById("amendusername").disabled=false;
		return true;
	}
	
	else
	{
		
		populate();
		toggleLock();
		return false;
	}
}
</script>
	 
		<div id="header">
			<h1>Undertakers</h1>
		</div>
		
				
		<div id="content">
		
		
		<input type="checkbox" name="" id="check">
	
				 <div class ="container2">
				   <label for ="check">
				     <span class="fas fa-times" id="times"></span>
				     <span class="fas fa-bars" id="bars"></span>
				   </label>
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
			<div id="main1">
			<h3>View Employee</h3>
			<br>
			<?php include'listbox.php'; ?>
			<table class="center"></th>
           <div  class ="inputbox">
		   <p id ="display"> </p>
           <input type = "button" value="Amend Details" id="amendViewbutton" onclick ="toggleLock()">
           <form name="myForm" action="AmendEmployeeView.php"  onsubmit="return confirmCheck()" method="post">
            <tr><td> <label for ="amendid">Employee ID</label></td><td>
           <input type ="text" name ="amendid" id="amendid"  ></td></tr>
		   <br>
           <tr><td> <label for ="amendname">Employee Name</label></td><td>
           <input type ="text" name ="amendname" id="amendname" ></td></tr>
		   <br>
          <tr><td> <label for ="amendsurname">Employee Surname</label></td><td>
           <input type ="text" name ="amendsurname" id="amendsurname"  placeholder= "Surname" ></td></tr>
		   <br>
          <tr><td>  <label for ="amendaddress">Address</label></td><td>
           <input type ="text" name ="amendaddress" id="amendaddress"  placeholder= "Address" ></td></tr>
		   <br>
          <tr><td><label for ="amendemail">Email</label></td><td>
           <input type ="text" name ="amendemail" id="amendemail"  placeholder= "Email"  title ="Enter employee ppsno"></td></tr>
		   <br>
           <tr><td><label for ="amendppsno">PPS Number</label></td><td>
           <input type ="text" name ="amendppsno" id="amendppsno"  placeholder= "ppsno"  title ="Enter employee Job ">
		   <br>
           <tr><td><label for ="amendjob">JOB</label></td><td>
           <input type ="text" name ="amendjob" id="amendjob"  placeholder= "job"  title ="Enter employee phone number ">
		   <br>
        <tr><td><label for ="amendphonenumber">Phone</label></td><td>
       <input type ="text" name ="amendphonenumber" id="amendphonenumber"  placeholder= "phonenumber"  title ="Enter employee phone number ">
		   <br>
           <tr><td><label for ="amendusername">Username</label></td><td>
           <input type ="text" name ="amendusername" id="amendusername"  placeholder= "username"  title ="Enter employee username ">
		   <br>
		   <br> 
		 <input type = "submit" value ="Save Changes"></td></tr> 
			</tr></table>
		   </form>
            
	      </div>

	 </div>

</body>

</html>
