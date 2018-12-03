<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php print $person->name; ?></title>
    </head>
<style>
body {
    background-color: lightblue;
   color:red;
   text-align:center;
    background-image: url("images/p1.jpg");
}
</style>
    <body>
        <h1><?php print $person->name; ?></h1>

<form  method="POST" action="">        


          

            <label for="phone">Phone</label>
			
<input type="text" name="phone" id="phone" value="<?php echo htmlentities($person->phone);?>">
	








        
        <br>
            <span class="label">Email:</span>
            <?php print $person->email; ?>
        
       
<br>
            <span class="label">State:</span>
            <?php print $person->state_name; ?>
        
	<br>
            <span class="label">Education:</span>
            <?php print $person->education; ?>
        <br>

            <span class="label">Occupation:</span>
            <?php print $person->occupation; ?>
        <br>

<input type="hidden" name="id" value=<?php echo $_GET['id'];?> >
             			
<input type="submit" name="updatePhone" value="Change">


</form>		
    </body>
<a href='javascript:self.history.back();'>GO BACK</a>
</html>