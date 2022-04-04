<?php

if (strtolower(($_POST['username'])) == "select * from users" || strtolower(($_POST['password'])) == "select * from users") {
  echo "Success!  You hacked the second website, nice job!  The SQL user table is below:";
  echo "<br>";
  echo "<br>";
  echo " Name         | ID  | Username | Password    ";
  echo "<br>";
  echo "Jill Smith    | 123 | jsmith   | jSmith1234";
  echo "<br>";
  echo "Amelia Mercier| 456 | amercier | IloveMy2Dogs";
  echo "<br>";
  echo "Sarah Oliver  | 789 | soliver  | HousePlantsBaby6";
  echo "<br>";
  echo "Benjamin Patel| 101 | bpatel   | Patel4Life";
  echo "<br>";
  echo "Noah Poulsen  | 112 | npoulsen | drugsAreBad10";
  echo "<br>";
  
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
