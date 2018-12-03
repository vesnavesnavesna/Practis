<html>
<head>
    <title>Register</title>
</head>
 
<body>
    

   <?php if(!isset($_POST['Registersubmit'])) { ?>
        <p><font size="+2">Register</font></p>
        <form name="form1" method="post" action="">
            <table width="75%" border="0">
                <tr> 
                    <td width="10%">Full Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr> 
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>            
                <tr> 
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr> 
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr> 
                <td> Login type</td> 
               <td>
               <select name="role">
               <option value="admin">ADMIN</option>
               <option value="user">USER</option>
               </select>
              </td>
                </tr>
                
                <tr> 

                    <td>&nbsp;</td>
                    <td><input type="submit" name="Registersubmit" value="Register"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>
</html>