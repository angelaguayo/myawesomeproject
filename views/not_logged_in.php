<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>
<!--<link href="css/header.css" rel="stylesheet"> -->
<!-- login form box -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>HCTCHROME LOGIN</title>
    <style media="screen">



        div.container{
          width: 700px;
          height: 360px;
          background-color: f2f2f2;
          position: absolute;
          left: 50%;
          top: 50%;
          margin-left: -350px;
          margin-top: -210px;

        }

        input[type=text], select {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }

        input[type=password], select {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }

        input[type=submit] {
          width: 100%;
          background-color: #4CAF50;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }

        input[type=submit]:hover {
          background-color: #45a049;
        }

        div {
          border-radius: 5px;
          background-color: #f2f2f2;
          padding: 20px;
        }

        /*-------------------------------------------*/
        .header {
          overflow: hidden;
          background-color: #f1f1f1;
          padding: 10px 5px;
        }

        .header a {
          float: left;
          color: black;
          text-align: right;
          padding: 12px;
          text-decoration: none;
          font-size: 14px;
          line-height: 20px;
          border-radius: 2px;
        }

        .header a.logo {
          font-size: 22px;

        }

        .header a:hover {
          background-color: #ddd;
          color: black;
        }

        .header a.active {
          background-color: dodgerblue;
          color: white;
        }

        .header-right {
          float: right;
        }

        @media screen and (max-width: 500px) {
          .header a {
            float: none;
            display: block;
            text-align: right;
          }

          .header-center {
            float: none;
          }
        }

    </style>





  </head>
  <body>




  <div class="header">
    <a href="#default" class="logo">compañia logo</a>
    <div class="header-right">
      <a class="active" href="#home">login</a>
      <a href="#contact">Contact</a>
      <a href="#about">About</a>
    </div>
  </div>


<div class="container">
  <form method="post" action="index.php" name="loginform">
  <div class="row">
    <div class="col-25">
      <label for="login_input_username">Username</label>
    </div>
    <div class="col-75">
      <input id="login_input_username" class="login_input" type="text" name="user_name" placeholder="Your name.." required />
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="login_input_password">Password</label>
    </div>
    <div class="col-75">
      <input id="login_input_password" class="login_input"  type="Password" name="user_password" autocomplete="off" required />
    </div>
  </div>
  <div class="row">
    <input type="submit"  name="login" value="Log in" />
  </div>
  or <a href="register.php">Register new account</a>
  </form>
</div>






<!-- ---------------------------------------------- >



<!-- ---------------------------------------------- >

  </body>
</html>
