<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Sign In/Sign Up - Lost & Found</title>
      <link rel="icon" type="image/x-icon" href="/images/Logo.png">
      <link rel="stylesheet" href="css/Userlogin.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>

    <!-- Log In Form Section -->
    <section>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="signup.php" method="post">
                    <h1>Sign Up</h1>
                    <label>
                        <input type="text" name="name" placeholder="Name" required/>
                    </label>
                    <label>
                        <input type="text" name="en" placeholder="Enrolment Number" required/>
                    </label>
                    <label>
                        <input type="email" name="email" placeholder="Email" required/>
                    </label>
                    <label>
                        <input type="password" name="pass" placeholder="Password" required/>
                    </label>
                    <button style="margin-top: 9px">Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="auth.php" method="post">
                    <h1>Sign in</h1>

                    <label>
                        <input type="email" name="email" placeholder="Email" required/>
                    </label>
                    <label>
                        <input type="password" name="pass" placeholder="Password" required/>
                    </label>
                    <button>Sign In</button>
                    <a href="index.php">Back to Homepage</a> 
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Log in</h1>
                        <p>Sign in here if you already have an account </p>
                        <button class="ghost mt-5" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Create, Account!</h1>
                        <p>Sign up if you still don't have an account ... </p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="js/user.js"></script>
    </body>
    </html>