
<html>
</body>	
<h3>Edit information</h3>
	
<form method="post">
		
<fieldset>
			
<legend>Edit Form</legend>

			  
			                
 

 <form  method="POST" action="index.php">                 	
<input type="hidden" name="action" value="update_persons" />
	
<label for="name">Name</label>
	
		
<input type="text" name="name" id="name" value="<?php echo  htmlentities($person->name); ?>">
			
			
<br>
			
<label for="phone">Phone</label>
			
<input type="text" name="phone" id="phone" value="<?php echo htmlentities($person->phone);?>">
						
<br>
			
<label for="email">Email</label>
			
<input type="text" name="email" id="email" value="<?php echo  htmlentities($person->email); ?>">
			
<br>
<label for="state_name">State</label>
			
<input type="text" name="state_name" id="state_name" value="<?php echo  htmlentities($person->state_name); ?>">
<br>
<label for="education">Education</label>
			
<input type="text" name="education" id="education" value="<?php echo  htmlentities($person->education); ?>">

<br>
<label for="occupation">Occupation</label>
			
<input type="text" name="occupation" id="occupation" value="<?php echo  htmlentities($person->occupation); ?>">
<br>			
			
<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
 
<label for="update_persons"> </label>               			
<input type="submit" name="Update" value="Update">
		
</fieldset>
	
<a href="index.php">GO BACK</a>


</form>
</body>
</html>		

	
