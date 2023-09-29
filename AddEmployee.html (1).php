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

			
            <form  action="Addemployee.php" method="Post"> 
			<div id="main1">
			<h3>Add New Employee</h3>
			<br>
			<table class="center"></th>
           <div  class ="inputbox">
            <tr><td> <label for ="name">Name</label></td><td>
           <input type ="text" name ="name" id="name"  placeholder= "Name" title ="Enter employee name"></td></tr>
           </div>
		   <br>
		   <div  class ="inputbox">
           <tr><td> <label for ="surname">Surname</label></td><td>
           <input type ="text" name ="surname" id="surname"  placeholder= "Surname" title ="Enter employee surname"></td></tr>
           </div>
		   <br>
		   <div  class ="inputbox">
          <tr><td> <label for ="address">Address</label></td><td>
           <input type ="text" name ="address" id="address"  placeholder= "Address" title ="Enter employee address"></td></tr>
           </div>
		   <br>
		    <div  class ="inputbox">
          <tr><td>  <label for ="email">Email</label></td><td>
           <input type ="text" name ="email" id="surname"  placeholder= "Email"  title ="Enter employee email"></td></tr>
           </div>
		   <br>
		    <div  class ="inputbox">
          <tr><td><label for ="ppsno">PPS Number</label></td><td>
           <input type ="text" name ="ppsno" id="ppsno"  placeholder= "PPSNO"  title ="Enter employee ppsno"></td></tr>
           </div>
		   <br>
		    <div  class ="inputbox">
           <tr><td><label for ="job">JOB</label></td><td>
           <input type ="text" name ="job" id="job"  placeholder= "Job"  title ="Enter employee Job ">
           </div>
		   <br>
		   <div  class ="inputbox">
           <tr><td><label for ="phonenumber">Phone</label></td><td>
           <input type ="text" name ="phonenumber" id="phonenumber"  placeholder= "phonenumber"  title ="Enter employee phone number ">
           </div>
		   <br>
		    <div  class ="inputbox">
           <tr><td><label for ="username">Username</label></td><td>
           <input type ="text" name ="username" id="username"  placeholder= "username"  title ="Enter employee username ">
           </div>
		   <br>
		   <br>
		  
		   <input type="submit" class="mybuttom" value="Add Employee" name="submit"/>
		   &nbsp;
		   <input type="reset" class="mybuttom" value="Clear" name="Reset"/>
		 
          
		   </form>
            
	      </div>
	  </div>
				
		<div id="footer">
			Copyright &copy; 2022 Undetakers.
		</div>
	

</body>

</html>
