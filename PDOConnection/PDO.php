<?php

try {
  $db = new PDO('mysql:host=localhost;dbname=php_project;chartset=utf8','root','1234');
  // var_dump($db);
}
catch(Exception $e) {
  // echo "An error has occurred!";
  // echo $e;
  echo $e->getMessage();
}

?>