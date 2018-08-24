<?php
   ob_start();
   session_start();
?>
<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   <head>
      <title>CAMAGRU - Famous made easy!</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #2b2b2b;
         }
         .container {
            text-align:center;
         }
         .form-signin {
            width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: white;
            border-radius: 10px;
         }
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         .form-signin .checkbox {
            font-weight: normal;
         }
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
            border-radius: 10px;
         }
         .form-signin .form-control:focus {
            z-index: 2;
         }
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
            border-radius: 10px;
         }
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
            border-radius: 10px;
         }
         .login_button {
             width: 190px;
             height: 40px;
             font-size: 15px;
             font-weight: bold;
             color: #2b2b2b;
             background-color: #30c6fa;
             border-color: #1c82f0;
             border-radius: 10px;
             margin: 5px;
         }
         .signup_button {
             width: 190px;
             height: 40px;
             font-size: 15px;
             font-weight: bold;
             color: #2b2b2b;
             background-color: #ffbf00;
             border-color: #ffbf00;
             border-radius: 10px;
             margin: 5px;
         }
         h2 {
             font-size: 30px;
             color: white;
             text-align:center;
         }
      </style>
   </head>
   <body>
         <h2>CAMAGRU</h2>
      <div class = "container form-signin">
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'tutorialspoint' && 
                  $_POST['password'] == '1234') {
                    $_SESSION['valid'] = true;
                    $_SESSION['timeout'] = time();
                    $_SESSION['username'] = 'tutorialspoint';
                    echo 'You have entered valid use name and password';
               } else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div>
      <div class = "container">
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" 
            method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "Username" 
               required autofocus>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "Password" required>
            <button class = "login_button" type = "submit" 
               name = "login">Login</button>
         </form>
         <form>
            <button class = "signup_button" type = "submit"
                formaction="signup.php" 
                name = "sign_up">Sign Up</button>
         </form>
      </div> 
   </body>
</html>