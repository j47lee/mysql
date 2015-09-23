<?php

  //need to display before any code/HTML
  session_start();

  //session variable(variable stays active until user leaves session)
  $_SESSION['loginid']=1;

  echo $_SESSION['loginid'];


?>
