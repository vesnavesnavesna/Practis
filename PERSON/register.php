    <?php
    include("model/config.php");
 
    if(isset($_POST['Registersubmit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $user = $_POST['username'];
        $password = $_POST['password'];
        $role=$_POST['role'];
 
        if($user == "" || $password == "" || $name == "" || $email == "") {
            echo "All fields should be filled. Either one or many fields are empty.";
            echo "<br/>";
            echo "<a href='register.php'>Go back</a>";
        } 
          elseif($role=='admin' && !($password=="admin717")) { 
                 echo"Wrong admin password";}

else {
             $q="INSERT INTO users(name,email,username, password) VALUES('$name', '$email', '$user', md5('$password'))";
             mysqli_query($link,$q);
             $q="INSERT INTO roles(role) VALUES ('$role')";
            
            mysqli_query($link,$q)
            or die("Could not execute the insert query.".mysqli_error($link));
            
            echo "Registration successfully";
            echo "<br/>";
            echo "<a href='login.php'>Login</a>";
        }
    }

include "view/register.php";
?>