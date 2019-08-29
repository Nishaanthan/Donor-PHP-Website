<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>JoinHands - Logout </title>
  <?php include 'css/css.html'; ?>
</head>

<body>
    <div class="form">
          <h1>Thank You!!</h1>
              
          <p><?= 'You Have Sucessfully Logout!'; ?></p>
          
          <a href="http://localhost/JoinHands/Landing%20Page/"><button class="button button-block"/>Back</button></a>

    </div>
</body>
</html>
