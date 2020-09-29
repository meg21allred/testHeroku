<?php

$userName = $_POST['name'];
$userEmail = $_POST['email'];
$userMajor = $_POST['major'];
$userComments = $_POST['comments'];

if (empty($_POST["major"])) {
   
    $gender = test_input($_POST["gender"]);
 }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

echo "your info:".'<br><br>';
echo "$userName".'<br>';
echo '<a href="mailto:'.$userEmail.'">'.$userEmail.'</a>';
?>