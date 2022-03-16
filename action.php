<?php

if (($_POST['username']) == "select * from users" || ($_POST['password']) == "select * from users") {
  echo "Success!  You hacked the second website, nice job!";
  echo "<br>";
  echo "<br>";
  echo "Hold tight while others finish this exercise.";
} else {
  echo "Wrong username and password. Try again";
}
?>