<?php

  if ($_POST['submit']) {

    //check for valid email
    if (!$_POST['email']) $error.='<br />Please enter your email';
      else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.='<br />Please enter a valid email address';

    //check for valid pw
    if (!$_POST['password']) $error.='<br />Please enter your password';
      else {
        //password validations
        if (strlen($_POST['password'])<8) $error.='<br />Please enter a password with at least 8 characters';
        if (!preg_match('`[A-Z]`', $_POST['password'])) $error.='<br />Please include at least one capital letter in your password';
      }

    if ($error) echo 'There were error(s) in your signup details:'.$error;
      else {

        $link=mysqli_connect('localhost','cl57-mydb-d5m','dRY^KY^6U','cl57-mydb-d5m');
        $query="SELECT * FROM `users` WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."'";
        $result = mysqli_query($link,$query);

        //check if email in db
        //stores a number of items in database that matches, 0 if no emails match in db
        $results = mysqli_num_rows($result);
        if($results) echo "That email is already registered. Do you want to log in?";
          else {
            //INSERT email and password into db
            $query = "INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";
            mysqli_query($link,$query);
            echo "You've been signed up!";
          }//end else
      }//end else

  }//end submit POST

?>

<form method="post">
  <input type="email" name="email" id='email'>
  <input type="password" name="password">
  <input type="submit" name='submit' value='Sign Up'>
</form>
