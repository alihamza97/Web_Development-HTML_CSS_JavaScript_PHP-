<?php

//ajax validation
$value = $_GET['query'];
$formfield = $_GET['field'];
if ($formfield == "fname") {
if (!preg_match("/^[A-Za-z]+$/", $value)) {
echo "Only alphabets!";
} 
}
if ($formfield == "lname") {
if (!preg_match("/^[A-Za-z]+$/", $value)) {
echo "Only alphabets!";
} 
}
?>