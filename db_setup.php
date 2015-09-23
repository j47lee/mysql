<?php

  //connecting to database

  //ip address, db username, db password, db name
  mysqli_connect('localhost','cl57-mydb-d5m','dRY^KY^6U','cl57-mydb-d5m');

  // //mysqli connection error, but don't show client the error
  // echo mysqli_connect_error();

  if (mysqli_connect_error()) {
    // echo 'Error connecting to database.';
    die('Could not connect to database'); //die stops the script from runing immediately
  }

  echo 'Hi, I will not show if there is an error.'

?>
