<?php

if (strtolower(($_POST['username'])) == "select * from users" || strtolower(($_POST['password'])) == "select * from users") {
  echo "Success!  You hacked the second website, nice job!";
  echo "<br>";
  echo "<br>";
  echo "Hold tight while others finish this exercise.";
} else {
  echo "Sorry, wrong try again";
  echo "<br>";
  echo "<br>";
  echo "Hint: Use SQL Injection.  The table name is [users]";
}
?>