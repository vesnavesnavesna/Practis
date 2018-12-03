<html>
<head>
    <title>Login</title>
</head>
 
<body>
<a href="index.php">Home</a> <br />
<?php if(!isset($_POST['submitLogin'])) {
 ?>
    <p><font size="+2">Login</font></p>
    <form name="form1" method="post" action="">
        <table width="75%" border="0">
            <tr> 
                <td width="10%">Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr> 
                <td>&nbsp;</td>
                <td><input type="submit" name="submitLogin" value="Login"></td>
            </tr>
        </table>
    </form>
<?php
}
?>
</body>
</html>