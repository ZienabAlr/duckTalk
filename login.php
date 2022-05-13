<?php


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DuckTalk</title>
</head>
<body>
    <header>
    <nav>
       <img src="images/logo.png" alt="logo">
       <a href="login.php">Login</a>
       <a class="activeBtn" href="signup.php">Sign Up</a>
    </nav>
    </header>

    <section>

    <div id="signupForm">
        <div class="wrapper">
            <form action=""  method = "post" class="form">

              <h1 class="title">Login</h1>
                 
              <!-- Error -->
              <?php if (isset($error)) : ?>
                <div class="error">
                  <p>
                    Sorry, we can't log you in with that email address and password. Can you try again?
                  </p>
                </div>
              <?php endif; ?>

                <div id="inputContainer">
                    <input type="text" class="input" placeholder="Enter your school email adress" name="email" required="">
                    <label for="" class="label">Email</label>
                </div>

                <div id="inputContainer">
                    <input type="text" class="input" placeholder="a" name= "password">
                    <label for="" class="label">Password</label>
                </div>

                <div id="inputContainer">
                    <!-- <h4>Already have an account? -->
                        <a href="reset-password.php" class="login">Forgot your password?</a></h4>
                </div>


                <input type="submit" id="submitBtn" value="Login">
                <input type="submit" id="submitBtn" value="Beck">

                <div id= "noAccount">
                  <h4>Don't have an account? <a href="signup.php">Sign up</a></h4>

                  <!-- <input type="submit" id="submitBtn" value="Signup"> -->
                </div>
            </form>
        </div>
    </div>

    </section>
</body>
</html>