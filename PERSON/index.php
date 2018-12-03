<?php session_start(); ?>
<?php
include("view/header.php");
if(isset($_SESSION['valid']) && $_SESSION['role']=='admin') { 
   
          
              include_once 'controller/Controller.php';
               $controller = new PersonsController();
               $controller->handleRequest();}
            

elseif(isset($_SESSION['valid']) && $_SESSION['role']=='user'){
           
   include_once 'controller/ControllerFORuser.php';
    $controller = new PersonsController();

      $controller->handleRequest();}

 else {
        echo "You must be logged in to view this page.<br/><br/>";
        echo "<a href='login.php'>Login</a> | <a href='register.php'>Register</a>";
    }
include("view/footer.php");
    ?>
