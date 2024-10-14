<?php
   ob_start();
   session_start();
?>
<html>
   <head>
      <title>PHP Session</title>
   </head>
   <body>
      <h2>Enter Username and Password</h2>
      
      <div>
         <?php
            $msg = '';
            
            // Check if login form is submitted
            if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
               // Hardcoded username and password (for simplicity)
               if ($_POST['username'] == 'dacoe' && $_POST['password'] == '1234') {
                  // Set session variables
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'dacoe';
                  
                  echo 'User name and password are valid';
               } else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div>

      <!-- Login Form -->
      <div>
         <form role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <h4><?php echo $msg; ?></h4>
            <input type="text" name="username" placeholder="Username" required autofocus><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit" name="login">Login</button>
         </form>
         <br>
         Click here to clear the session: <a href="exp14_logout.php" title="Logout">Logout</a>
      </div>
   </body>
</html>
