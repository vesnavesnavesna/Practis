<?php
 
require_once 'C:/Apache24/htdocs/PERSON/model/PersonsModel.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/PERSON/model/Autoloader.php';

 
class PersonsController {
     
    private $personsModel;
//10     
    public function __construct() {
        $this->personsModel = new PersonsModel();
    }
     
    public function redirect($location) {
        header('Location: '.$location);
    }
     
    public function handleRequest() {
        $op = isset($_GET['op'])?$_GET['op']:NULL;
        try {
            if ( !$op ) {
                $this->listPersons();
            } elseif ( $op == 'new' ) {
                $this->addPerson();
            } elseif ( $op == 'delete' ) {
                $this->deletePerson();
            
            } elseif ( $op == 'update' ) {
                $this->updatePerson();
            } else {
                $this->showError("Page for operation ".$op." was not found!");
            }
        } catch ( Exception $e ) {
            
            $this->showError("Application error", $e->getMessage());
        }
    }
    
    public function listPersons() {
     

        $persons = $this->personsModel->selectAll();
        include ROOT_PATH.'view/persons.php';}
    
     
    public function addPerson() {
        
        $title = 'ADD NEW PERSON';
         $name="";
         $phone="";
         $email="";
         $state_name="";
         $education="";
         $occupation="";
         $errors = array();
         
        if (isset($_POST['submit'])){
             
            $name=$_POST['name'];
            $phone=$_POST['phone'];
            $email=isset($_POST['email'])? $_POST['email']:'';
           
            $state_name=$_POST['state_name'];
            $education=$_POST['education'];
            $occupation=$_POST['occupation'];
             
            try {
               
                $this->personsModel->insert($name, $phone, $email,$state_name,$education,$occupation); 
                header('Location:index.php');
                return;
            } catch (ValidationException $e) {
                $errors = $e->getErrors();
            }
        }

         
        include ROOT_PATH.'view/person_form.php';
    }

     
    public function deletePerson() {
      //if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){

           $id=$_GET["id"];
         
	  $this->personsModel->delete($id);
	  //else{die("Ne brise".mysqli_error());}
         
          
         
       $this->redirect('index.php');
    }
     

public function updatePerson() {
      if(isset($_GET['id'])){
	  $id=($_GET["id"]);}
	  $errors = array();
	  $person = $this->personsModel->selectById($id);
          if (isset($_POST['Update'])){
             $id=trim($_GET["id"]);
	
     
	     $name=$_POST['name'];
             $phone= $_POST['phone'];
             $email=$_POST['email']; 
   
	     $state_name=$_POST['state_name'];
             $education=$_POST['education'];
             $occupation=$_POST['occupation'];
		
		try {
               
                $this->personsModel->update($id,$name,$phone,$email,$state_name,$education,$occupation);
                header('Location:index.php');
                return;
            } catch (ValidationException $e) {
                $errors = $e->getErrors();
            }
         
        
     
     
        
}
include ROOT_PATH.'view/edit.php';

}
     
    public function showPerson() {
        $id=$_GET['id'];
        if ( !$id ) {
            throw new Exception(' Error.');
        }
        $person = $this->personsModel->selectById($id);
         
        include ROOT_PATH.'view/person.php';
    }
     
    public function showError($title, $message) {
        include ROOT_PATH.'view/error.php';
    }
     
}
?>
