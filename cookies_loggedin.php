<?php

  //key,value,time to expire from current time
  setcookie("id","1234",time()+86400);

  //$_COOKIE is system variable
  echo $_COOKIE['id'];

 ?>
