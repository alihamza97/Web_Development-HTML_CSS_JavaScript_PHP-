<!DOCTYPE html>
<html>
    <head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">	
<link rel='stylesheet' href="Styles/stylee.css" type="text/css" />    
<title> ICT Online    </title>
<script src="Script/JavaScripts.js"></script>
 
        
 
</head>
<body>
   
    <?php   
     include("PHPfiles/header.php");
    ?>
    <?php   
     include("Script/Server.php");
    ?>
    
    <div><h2 id="welcome">  WELCOME</h2>
         </div>
       <div id="HomeImage" > <img src="Images/h.jpg" height="400px" width="50%" align="right">
         </div>
    
    <div >   <h3 id="home-sub-head">  Don't have an account yet? </h3> </div>

      <div id="form" >  
      <form name="homeform"  action="index.php" method="POST" >


         <table>
        <tr>
      <td> &nbsp; First Name:</td> 
           <td>  <input id="fname1" type="text" placeholder="FirstName" name="fname" onkeyup="validateNames('fname', this.value)" >
			 <td><div id="fname" style=" color: red;font-size: 10px;"> </div></td>
             </tr>
             
            <tr>
	 <td> &nbsp; Last Name:</td> 
           <td>  <input id="lname1"type="text" placeholder="LastName" name="lname" onkeyup="validateNames('lname', this.value)">   
				<td > <div id="lname" style=" color: red;font-size: 10px;"> </div></td>

            </tr>
       <tr> 
            <td>&nbsp; Email:</td>
           <td> <input id="email" type="text" placeholder="Email" name="email">  </td>
		    <div id="email_error" class="error"></div>
            </tr>
            <tr><td>
                &nbsp; Password:</td>
                <td>   <input id="pwd" type="Password" placeholder="pwd" name="pwd">   </td>
				   <div id="pwd_error" class="error"></div>
        </tr>
            <tr><td>
              &nbsp; Confirm Password:</td>
                <td> <input type="password" placeholder="Password" name="cpwd">  </td>
        </tr>
        <tr>
            <td>
                          <button type="submit" id="btn" name="Registration_btn" onclick="return validate()"  >    Sign Up  </button>

            </td>

            </tr>
        </table> 
   </div>     
    </form>
    
   
 
    
    
    <form id="text">
   
    <p> Welcome to the ICT Online,<br>
        this is the place where you 
        can find material <br>for ICT 
      3 main courses:Business<br>
     Software and Technology.<br>
    The materials on this web are<br>
    collected from reliable
    sources.</p> 
        </form>
    

    <?php   
     include("PHPfiles/footer.php");
    ?>

</body>
    </html>