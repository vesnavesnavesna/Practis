<?php
include_once 'C:/Apache24/htdocs/PERSON/model/ValidationException.php';
?>

<?php 
//include "config.php";
class PersonsModel {
   
    public function selectAll() {
    try{
    $q= "SELECT * FROM persons
        JOIN states ON persons.id=states.id
        JOIN education ON states.id=education.id
        JOIN occupation ON education.id=occupation.id";		
   
	$dbres=mysqli_query(mysqli_connect("localhost", "root", " ","contactsnew"),$q);
    $persons = array();
          while ( $obj = mysqli_fetch_object($dbres)) {
                     
                      $persons[]=$obj;}

return $persons;}
  catch(Exception $e){
      throw $e;}
}

   
    public function selectById($id) {
       
        $dbId = mysqli_real_escape_string(mysqli_connect("localhost", "root", " ","contactsnew"),$id);
         $q= "SELECT * FROM persons
         JOIN states ON persons.id=states.id
         JOIN education ON states.id=education.id
         JOIN occupation ON education.id=occupation.id
		 WHERE persons.id=$dbId";
        
       $dbres=mysqli_query(mysqli_connect("localhost", "root", " ","contactsnew"),$q);
         
         $ob=mysqli_fetch_object($dbres);
          
         return $ob;
       }

   public function updatePhone($id,$phone) {
    
         $errors = array();
         if ( !isset($phone) || empty($phone)) {
            $errors[] = 'Phone is required';}
       else{
         $dbId = mysqli_real_escape_string(mysqli_connect("localhost", "root", " ","contactsnew"),$id);
        
          $q="UPDATE persons SET phone='$phone' WHERE   persons.id=$dbId";					  
        mysqli_query(mysqli_connect("localhost", "root", " ","contactsnew"),$q);
        return mysqli_insert_id(mysqli_connect("localhost", "root", " ","contactsnew"));}
                         
   throw new ValidationException($errors);
}

     
    public function insert( $name, $phone, $email,$state_name,$education, $occupation) {
         $errors = array();
          if ( !isset($name) || empty($name)) {
            $errors[] = 'Name is required';}
        elseif ( !isset($phone)||empty($phone)) {
            $errors[] = 'Phone is required';}
        elseif ( !isset($state_name) || empty($state_name)) {
            $errors[] = 'Name of state is required';}
         elseif ( !isset($education) || empty($education)) {
            $errors[] = 'Education is required';}
       elseif ( !isset($occupation) || empty($occupation)) {
            $errors[] = 'Occupation is required';}
       else{


        //$dbEmail=($email!=NULL)? "'".mysqli_real_escape_string($email)."'" : '';
         $q="INSERT INTO persons (name, phone, email) VALUES ('$name','$phone','$email'); ";
         $q.="INSERT INTO states(state_name) VALUES ('$state_name');";
         $q.="INSERT INTO education(education) VALUES ('$education');";
         $q.="INSERT INTO occupation(occupation) VALUES ('$occupation')";
        mysqli_multi_query(mysqli_connect("localhost", "root", " ","contactsnew"),$q);
        return mysqli_insert_id(mysqli_connect("localhost", "root", " ","contactsnew"));
}
throw new ValidationException($errors);
    }

     
    public function delete($id){
try{
      $dbId = mysqli_real_escape_string(mysqli_connect("localhost", "root", " ","contactsnew"),$id);
       $q= "DELETE persons.*,states.*,education.*,occupation.*
	    FROM persons
            JOIN states ON persons.id=states.id
            JOIN education ON states.id=education.id
            JOIN occupation ON education.id=occupation.id
	    WHERE persons.id=$dbId";
       mysqli_query(mysqli_connect("localhost", "root", " ","contactsnew"),$q);
    }
catch(Exception $e){
             throw $e;}
  
}
 public function update($id,$name,$phone,$email,$state_name,$education,$occupation) {
    
         $errors = array();
         if ( !isset($name) || empty($name)) {
            $errors[] = 'Name is required';}
        elseif ( !isset($phone)||empty($phone)) {
            $errors[] = 'Phone is required';}
        elseif ( !isset($state_name) || empty($state_name)) {
            $errors[] = 'Name of state is required';}
         elseif ( !isset($education) || empty($education)) {
            $errors[] = 'Education is required';}
       elseif ( !isset($occupation) || empty($occupation)) {
            $errors[] = 'Occupation is required';}
       else{
         $dbId = mysqli_real_escape_string(mysqli_connect("localhost", "root", " ","contactsnew"),$id);
        //$dbEmail=($email!=NULL)?"'".mysqli_real_escape_string($email)."'":'NULL';
          $q="UPDATE persons
           JOIN states ON persons.id=states.id
           JOIN education ON states.id=education.id 
           JOIN occupation ON education.id=occupation.id 
		    SET name='$name',                      
                        phone='$phone',
                        email='$email',
                        state_name='$state_name',
                        education='$education',
                        occupation='$occupation'
            WHERE   occupation.id=$dbId";					  
        mysqli_query(mysqli_connect("localhost", "root", " ","contactsnew"),$q);
        return mysqli_insert_id(mysqli_connect("localhost", "root", " ","contactsnew"));}
                         
   throw new ValidationException($errors);


}
}
?>