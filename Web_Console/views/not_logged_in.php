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

<html >
<head>
  <meta charset="UTF-8">
  <title>Admin Console Log in</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="container">
  <div class="login">
  	<h1 class="login-heading">
      <center><strong>Admin</strong> Console</h1></center>
      <form method="post" action="index.php" name="loginform">
        <input placeholder="Username" id="login_input_username" class="login_input" type="text" name="user_name" required />
        <input placeholder="Password" id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />
          <div class="login-footer">
            <button type="submit" class="btn btn--right" name="login" value="Log in">Sign in  </button>
    
          </div>
      </form>
  </div>
</div>
  
    <script  src="js/index.js"></script>

</body>
</html>





