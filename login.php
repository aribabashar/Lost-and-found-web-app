<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin Login - Lost & Found</title>
      <link rel="icon" type="image/x-icon" href="/images/Logo.png">
      <link rel="stylesheet" href="css/login.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
    <div class="container">
        <h3>Admin Login</h3>
        
        <form action="admin.php" method="post" id="login-form">
          <div class="form-field">
            <label for="user-name">
              Username
            </label>
            <input type="text" name="user" id="user-name" size="50" required autofocus/>
          </div>
          
          <div class="form-field">
            <label for="pass">
              Password
            </label>
            <input type="password" name="pass" id="pass" size="50" required />
          </div>
          
          <div id="form-submit">
            <input type="submit" value="Login" />
          </div>
        </form>
        <div id="register-link">
            <span>
              <a href="index.php">
                Back to Home
              </a>
            </span>
          </div>
    </div>
   </body>
</html>