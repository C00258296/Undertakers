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

			
            
			<div id="main1">
			<h3>Add New Employee</h3>
			<br>
			<table class="center"></th>
           <div  class ="inputbox">
       
		 
                <input type = "button" value = "  Add Employee  " id = "menu" onclick = "window.location.href='AddEmployee.html.php';" >
                <br><br>
				
                <input type = "button" value = "Delete Employee" id = "menu"  onclick = "window.location.href='DeleteEmployee.html.php';">
			    <br><br>
               				
                <input type = "button" value = " View Employee " id = "menu" onclick = "window.location.href='ViewEmployee.html.php';">
                <br><br>
				
			    <input type = "button" value = " Take Funerals Details" id = "menu" onclick = "window.location.href='FuneralsDetails.html.php';" >
                <br><br>
          
		   
            
	      </div>
	  </div>
				
		<div id="footer">
			Copyright &copy; 2022 Undetakers.
		</div>
	

</body>

</html>
