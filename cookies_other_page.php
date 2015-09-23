<?php

  //expires the cookie (but cookie was already set at beginning of page load)
  //refresh page to execute the setcookie expirey
  setcookie("id","",time()-3600);

  //cookie is available to all pages (no need to set cookie like session_start)
  echo $_COOKIE['id'];

?>
