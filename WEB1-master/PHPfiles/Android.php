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
session_start();
if(isset($_SESSION['EMAIL']))
{

  ?>      
   <h4 id="subject-heading" >Android</h4>

     <div>   
          <h4 id="theory-heading"> Theory</h4> 
              
  <form id="theory"> <p> Find detailed and comprehensive course for developing your basic understanding of the subject.<br><br> Let&apos;s go!
</p>
         <li><a href="../Documents/AndroidTheory.doc">Click here to download.</a></li>
         </form>
       <h4 id="sub-head"> Practical</h4>
  
         <form id="practical"> <p>Need something to practice? We give you hundreds of assignments to develop your skill.
<br><br>Let&apos;s go! 
</p>
         <li><a href="../Documents/AndroidPractical.doc">Click here to download.</a></li>
       </form> </div>
<?php
}
else 
echo("You are not logged in yet.");
     include('footer.php');
    ?>
 

</body>
    </html>