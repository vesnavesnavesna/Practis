<?php session_start(); ?>
<?php
include("model/config.php");
 
if(isset($_POST['submitLogin'])) {
    $user = mysqli_real_escape_string($link, $_POST['username']);
    $pass = mysqli_real_escape_string($link, $_POST['password']);
 
    if($user == "" || $pass == "") {
        echo "Either username or password field is empty.";
        echo "<br/>";
        echo "<a href='login.php'>Go back</a>";
    } else {
             $q="SELECT * FROM users
                JOIN roles ON users.id_login=roles.id
                WHERE username='$user' AND password=md5('$pass')";
        $result = mysqli_query($link,$q)
        or die("Could not execute the select query.".mysqli_error($link));
        
        $row = mysqli_fetch_assoc($result);
        
        if(is_array($row) && !empty($row)) {
            $validuser = $row['username'];
            $_SESSION['valid'] = $validuser;
            $_SESSION['name'] = $row['name'];
            
            $_SESSION['id'] = $row['id'];
           $_SESSION['role'] = $row['role'];
           $_SESSION['password']=$row['password'];
        } else {
            echo "Invalid username or password.";
            echo "<br/>";
            echo "<a href='login.php'>Go back</a>";
        }
 
        if(isset($_SESSION['valid'])) {
            header('Location:index.php');            
        }
    }
}
include "view/login.php";
?>
    