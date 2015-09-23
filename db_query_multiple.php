<?php

  //connecting to database ============================================
  //"localhost or ip","my_user","my_password","my_db"
  $link = mysqli_connect('localhost','cl57-mydb-d5m','dRY^KY^6U','cl57-mydb-d5m');

  if (mysqli_connect_error()) {
    die('Could not connect to database'); //die stops the script from runing immediately
  }

  // //UPDATE
  // $query = "UPDATE `users` SET name='Ian O\'Neil' WHERE id=4 LIMIT 1";
  // mysqli_query($link,$query);

  //Command to db to extract, add, edit info ======================

  $name="Ian O'Neil";
  //SELECT query
  $query = "SELECT `name` FROM users WHERE name='".mysqli_real_escape_string($link,$name)."'";

  //run the query (two parameters (db,query))
  //$result does not return data, returns true if query is successful
  if ($result=mysqli_query($link,$query)) {

    //count rows of result
    echo mysqli_num_rows($result);

    //use while loop to go return each row
    while ($row = mysqli_fetch_array($result)){
      print_r($row);
    }

  } else {

    echo "It failed";

  }

?>
