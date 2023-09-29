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

			
            <form  action="FuneralsDetails.php" method="Post"> 
			<div id="main1">
			<h3>Add Funerals Details</h3>
			<br>
			<table class="center"></th>
           <div  class ="inputbox">
			<br>
			<table class="center"></th>
           <div  class ="inputbox">
            <tr><td> <label for ="name">Name</label></td><td>
           <input type ="text" name ="name" id="name"  placeholder= "Name" title ="Enter employee name"></td></tr>
           </div>
		   <br>
		   <div  class ="inputbox">
           <tr><td> <label for ="dob">DOB</label></td><td>
           <input type ="date" name ="dob" id="dob"  placeholder= "dob" title ="Enter date of birth"></td></tr>
           </div>
		   <br>
		   <div  class ="inputbox">
          <tr><td> <label for ="dod">DOD</label></td><td>
           <input type ="date" name ="dod" id="address"  placeholder= "dod" title ="Enter date of dead"></td></tr>
           </div>
		   <br>
		    <div  class ="inputbox">
          <tr><td>  <label for ="address">Address</label></td><td>
           <input type ="text" name ="address" id="address"  placeholder= "Address"  title ="Enter a address"></td></tr>
           </div>
		   <br>
		    <div  class ="inputbox">
          <tr><td><label for ="dodtime">DODTime</label></td><td>
           <input type ="time" name ="dodtime" id="dodtime"  placeholder= "DODTime"  title ="Enter the time date of dead"></td></tr>
           </div>
		   <br>
		    <div  class ="inputbox">
           <tr><td><label for ="customerid">CustomerID</label></td><td>
           <input type ="number" name ="customerid" id="customerid"  placeholder= "CustumerID"  title ="Enter the customer id">
           </div>
		   <br>
		   <div  class ="completed">
           <tr><td><label for ="completed">Completed</label></td><td>
           <input type ="number" name ="completed" id="customer"  placeholder= "Completed"  title ="Enter employee phone number ">
           </div>
		   <br>
		   <br>
		   <input type="submit" class="mybuttom" value="Add Details" name="submit"/>
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
