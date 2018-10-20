<?php   
     include('header.php');
    ?> 


<?php
session_start();
if(isset($_SESSION['EMAIL']))
{
$_session=array();
session_destroy();
echo("You have successfully logged out.");
}
else
echo("You are not logged in yet.");
?>

<?php   
     include('footer.php');
    ?> 