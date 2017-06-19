<!DOCTYPE html>
<html>
<head>
<title>Mini Masterpieces</title>
<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Roboto|Oswald|Sorts+Mill+Goudy|Open+Sans:300,400|Spectral" rel="stylesheet">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<style>
::selection{
  color: #494949;
  background-color: #ffecc9;
}
body {
  margin:0;
  overflow-x: hidden;
  background-color: white;
  font-family: 'Open Sans';
  color: #494949;
  cursor: crosshair;
}
 a {
   color: #494949;
   text-decoration: none;
 } a:hover{
  color: #ffecc9;
  cursor: help;
}

#wrapper {
  width: 100vw;
  padding:0;
}

#content {
  position: relative;
  padding-top: 50px;
  padding-bottom: 50px;
  margin: auto;
  height: auto;
}

#header {
  position: relative;
  width: 100vw;
  top:0;
  text-align: center;
  box-sizing: border-box;
  z-index: 999999;
}

#logo {
  margin:auto;
  width: 75px;
  height: 75px;
  border-radius: 100px;
  border: 1px solid black;
  background-color: white;
}

.nav {
  position: relative;
  right: 0;
  top:0;
  width: 100vw;
  box-sizing: border-box;
  font-size: 12px;
  letter-spacing: 1px;
  text-transform: uppercase;
  border-top: 1px solid #999999;
  border-bottom: 1px solid #999999;
  display: flex;
  justify-content: center; /* align horizontal */
  align-items: center; /* align vertical */
  height: 60px;
} .nav a{
  padding-right: 30px;
  padding-left: 30px;
  display: flex;
  justify-content: center; /* align horizontal */
  align-items: center; /* align vertical */
}
#title {
  width:100vw;
  height: 100px;
  top:0;
  left:0;
  padding: 15px;
  box-sizing: border-box;
  font-family: 'Dancing Script';
  font-size: 40px;
  text-align: center;
  line-height: 100%;
  letter-spacing: 3px;
  display: flex;
  justify-content: center; /* align horizontal */
  align-items: center; /* align vertical */
} #title:hover{
  color: #ffecc9;
}

.landing {
  position: relative;
  width: 75vw;
  left: 50%;
  margin-left: calc(80vw / -2);
  text-align: justify;
  font-size: 14px;
  padding: 20px;
  padding-top: 0px;
  margin-bottom: 65px;
  box-sizing: border-box;
  } .landing img{
    position: relative;
    opacity: 0.8;
}

.description {
  position: relative;
  width: 260px;
  height: 500px;
  top:0;
  left:50%;
  margin-left: 400px;
  font-size: 30px;
  padding: 20px;
  box-sizing: border-box;
}

#footer {
  position: relative;
  width: 75vw;
  left: 50%;
  margin-left: calc(80vw / -2);
  height: 60px;
  background-color: white;
  box-sizing: border-box;
  border-top: 1px solid #999999;
  padding-top: 10px;
}

#social {
  position: absolute;
  display: inline;
  right:0;
  border-left: 1px solid #999999;
  line-height: 200%;
} #social a {
  padding: 10px;
  height: 30px;
  justify-content: center; /* align horizontal */
  align-items: center; /* align vertical */
}

.headings {
  position: relative;
  font-size: 30px;
  padding: 10px;
  font-family: 'Open Sans';
  text-align: left;
  border-bottom: 1px solid #999999;
  font-weight: 300;
}

#text{
  position: relative;
  line-height: 175%;
  top: 10px;
}
td{
  padding:10px;
  vertical-align: top;
}
</style>
</head>

<body>
<div id="wrapper">
  <div id="header"><div id="title">mini masterpieces</div>
  <div class="nav">
    <a href="./index.html">Home</a>•
    <a href="./about.html">About</a>•
    <a href="./index.html">Create a Book</a>•
    <a href="./index.html">Blog</a>•
    <a href="./contact.html">Contact</a>
</div>
  </div>

<div id="content">
  <div class="landing">
    <form name="contactform" method="post" action="send_form_email.php">
  <table width="450px">
  <tr>
   <td valign="top">
    <label for="first_name">First Name *</label>
   </td>
   <td valign="top">
    <input  type="text" name="first_name" maxlength="50" size="30">
   </td>
  </tr>
  <tr>
   <td valign="top">
    <label for="last_name">Last Name *</label>
   </td>
   <td valign="top">
    <input  type="text" name="last_name" maxlength="50" size="30">
   </td>
  </tr>
  <tr>
   <td valign="top">
    <label for="email">Email Address *</label>
   </td>
   <td valign="top">
    <input  type="text" name="email" maxlength="80" size="30">
   </td>
  </tr>
  <tr>
   <td valign="top">
    <label for="telephone">Telephone Number</label>
   </td>
   <td valign="top">
    <input  type="text" name="telephone" maxlength="30" size="30">
   </td>
  </tr>
  <tr>
   <td valign="top">
    <label for="comments">Comments *</label>
   </td>
   <td valign="top">
    <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
   </td>
  </tr>
  <tr>
   <td colspan="2" style="text-align:center">
    <input type="submit" value="Submit">
   </td>
  </tr>
  </table>
  </form>
  <?php
if(isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "radicaljello@gmail.com";
    $email_subject = "You have received an email!";

    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br/><br/>";
        echo $error."<br/><br/>";
        echo "Please go back and fix these errors.<br/><br/>";
        die();
    }


    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }



    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br/>';
  }

    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br/>';
  }

  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br/>';
  }

  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br/>';
  }

  if(strlen($error_message) > 0) {
    died($error_message);
  }

    $email_message = "Form details below.\n\n";


    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }



    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
?>

<!-- include your own success html here -->

Thank you for contacting us. We will be in touch with you very soon.

<?php

}
?>
</div>
</div>
<div id="footer"><span style="font-size: 13px;">Copyright © 2017 Mini Masterpieces. All Rights Reserved.</span>
  <div id="social">
    <a href="http://twitter.com" title="follow us on twitter!" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a href="http://facebook.com" title="like us on facebook!" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    <a href="http://instagram.com" title="follow us on instagram!" target="blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
  </div>
</div>
</div>
</body>
</html>
