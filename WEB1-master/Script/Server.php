<?php

//SignUp Authentication
$servername = "studmysql01.fhict.local";
$username="dbi379335";
$password="";
$dbname="dbi379335";


try{
	$conn = new mysqli($servername, $username,$password,$dbname);
	
  if(isset($_POST['Registration_btn'])){
echo("successful in connection");
  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
   $cpwd = mysqli_real_escape_string($conn, $_POST['cpwd']);
  
  if ($pwd == $cpwd) {
      $pwd = md5($cpwd);//encrypt the password before saving in the database
      $query = ("INSERT INTO ictonline(FirstName, LastName, Email, Password) 
            VALUES('$fname','$lname','$email','$pwd')");
      mysqli_query($conn, $query);

      $_SESSION['username'] = $lname;
      $_SESSION['success'] = "You are now logged in";
      header('location: ../PHPfiles/Login.php');
    }

}
}catch(MySQLi_Sql_Exception $ex){
	echo("error in connection");
}




?>