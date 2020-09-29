<?php

$userName = $_POST['name'];
$userEmail = $_POST['email'];
$userMajor = $_POST['major'];
$userComments = $_POST['comments'];

echo "your info:".'<br><br>';
echo "$userName".'<br>';
echo '<a href="mailto:'.$userEmail.'">'.$userEmail.'</a>'.'<br>';
echo $userMajor."<br>";

$aContinents = $_POST['continents'];
 
    $N = count($aContinents);

    echo("You selected $N continents(s): ");
    for($i=0; $i < $N; $i++)
    {
      echo($aContinents[$i] . " ");
    }
  

echo $userComments;


?>