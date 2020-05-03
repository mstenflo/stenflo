<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "stenflo@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    //send email
    mail($admin_email, "New Form Submission", $message, "From:" . $email);
    
    header('Location: https://mstenflo.github.io/stenflo');
  }