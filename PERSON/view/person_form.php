<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8" />

<title>

   
<?php print htmlentities($title) ?>
</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color", "red");
    });
 $("input").blur(function(){
        $(this).css("background-color", "white");
    });
 
});

</script>



</head>

<body>

<?php
if ( $errors ) {
print '<ul>';
foreach ( $errors as $field => $error ) {
print '<li>'.htmlentities($error).'</li>';
}
print '</ul>';
}
?>

<form  method="POST" id="form" >

<label for="name">Name:</label><br/>
<input id="name" type="text" name="name"  value="<?php print htmlentities($name) ?>"/>
<br/>

<label for="phone">Phone:</label><br/>
<input id="phone" type="text" name="phone" value="<?php print htmlentities($phone)?>"/>
<br/>

<label for="email">Email:</label><br/>
<input id="email" type="text" name="email" value="<?php print htmlentities($email)?>"/>
<br/>



<br/>
<label for="state_name">State:</label><br/>
<input id="state_name" type="text" name="state_name" value="<?php print htmlentities($state_name)?>"/>
<br/>

<label for="education">Education:</label><br/>
<input id="education" type="text" name="education" value="<?php print htmlentities($education)?>"/>
<br/>

<label for="occupation">Occupation:</label><br/>
<input id="occupation" type="text" name="occupation" value="<?php print htmlentities($occupation)?>"/>
<br/>

<input type="hidden" name="form-submitted" value="<?php echo trim($_GET["id"]); ?>"/>
<button type="submit" name="submit" id="button">ADD</button>
</form>

<div id="output"></div>
</body>

<a href='javascript:self.history.back();'>GO BACK</a>
</html>