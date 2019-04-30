<?php
 

 require_once $_SERVER['DOCUMENT_ROOT'] . '/PERSON/model/Autoloader.php';
require_once ROOT_PATH.'model/PersonsModel.php';
 
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
            } elseif ( $op == 'show' ) {
                $this->showPerson();
           } elseif ( $op == 'new' ) {
                $this->addPerson();
            } else {
                $this->showError("Page for operation ".$op." was not found!");
            }
        } catch ( Exception $e ) {
            
            $this->showError("Application error", $e->getMessage());
        }
    }
    
    public function listPersons() {
     
        $persons = $this->personsModel->selectAll();
        include ROOT_PATH.'view/personsFORuser.php';}
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
            $email=isset($_POST['email'])? $_POST['email']:NULL;
           
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
    
     
    public function showPerson() {
   if(isset($_GET['id'])){
        $id=$_GET['id'];}
        $person = $this->personsModel->selectById($id);

          if(isset($_POST['updatePhone'])){
           
              $phone=$_POST['phone'];
               try {
               
                $this->personsModel->updatePhone($id,$phone);
                header('Location:index.php');
                return;
           } catch (ValidationException $e) {
                $errors = $e->getErrors();
            }}
        include ROOT_PATH.'view/person.php';
    }
     
    public function showError($title, $message) {
        include ROOT_PATH.'view/error.php';
    }
     
}
?>
