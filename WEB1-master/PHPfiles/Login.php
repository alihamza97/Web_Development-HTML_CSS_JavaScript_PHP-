<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">	
<link rel='stylesheet' href='../Styles/stylee.css' type="text/css" />    
<title> ICT Online    </title>
<script type="text/javascript" src="../Script/JavaScripts.js"></script>

	 	
</head>
<body>
  <?php   
     include('header.php');
    ?> 
<?php   
SESSION_START();
try{
	
$link = mysqli_connect("studmysql01.fhict.local", "dbi379335", "", "dbi379335");
   if(isset($_POST['Login2_btn']))
{


    $email = mysqli_real_escape_string($link, $_POST['lemail1']);
    $pwd = mysqli_real_escape_string($link, $_POST['lpwd1']);
$pwd=md5($pwd);




$query = "SELECT Email FROM ictonline WHERE Email = '$email' AND Password = '$pwd'";
if ($stmt = mysqli_prepare($link, $query)) {

    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
$numRows=mysqli_stmt_num_rows($stmt);


     if($numRows==1){
$_SESSION['EMAIL']=$email;
echo "Hello: {$_SESSION['EMAIL']}";
echo" Now you have access to Android content.(Software->Android)";

	  exit();
	   }	   
	   
	 
	 else{
		  echo ("Email and/or password do not match.");
	   }
		   
     
}
}
}
	catch(MySQLi_Sql_Exception $ex)
    {
	echo("error in connection");
}
    ?> 

<?php
if(isset($_SESSION['EMAIL']))
{
echo "Hello: {$_SESSION['EMAIL']}";
echo" Now you have access to Android content.(Software->Android)";
}
else{
?>
		    
       <h4 id="subject-heading" >Log into your account</h4>    
 <div id="frm">  
<form name="loginform"  action="Login.php" method="POST"> 
        <table> 
        <tbody><tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Email:</td>
           <td> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input id="lemail" type="text" name="lemail1"> </td>
			               
            </tr>
            <tr><td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input id="lpwd" type="Password" name="lpwd1"> </td>
				          
        </tr>
            <td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit" id="btn" name="Login2_btn" onclick="return lvalidate()">Login </button>

</td>

       
            </tbody></table>
        
       </form> </div>

<?php   
}
     include('footer.php');
    ?>
</body>

</html>