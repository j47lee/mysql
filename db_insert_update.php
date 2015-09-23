<?php

  //connecting to database ============================================
  //ip address, db username, db password, db name
  $link = mysqli_connect('localhost','cl57-mydb-d5m','dRY^KY^6U','cl57-mydb-d5m');

  if (mysqli_connect_error()) {
    die('Could not connect to database'); //die stops the script from runing immediately
  }

  //Command to db to extract, add, edit info ======================
  
  //INSERT command (users table) ------------------------------------
  // $query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('Olivia', 'olivia@gmail.com', 'password')";
  // // runs the command
  // mysqli_query($link,$query);

  //UPDATE command --------------------------------------------
  $query="UPDATE `users` SET `email`='olivia_baby@gmail.com' WHERE `id`=4 LIMIT 1";
  mysqli_query($link,$query);

  //SELECT query ------------------------------------------------
  $query = 'SELECT * FROM users';

  //run the query (two parameters (db,query))
  //$result does not return data, returns true if query is successful
  if ($result=mysqli_query($link,$query)) {

    //actually return data
    $row = mysqli_fetch_array($result);

    print_r($row);

  } else {

    echo "It failed";

  }

?>
