<?php


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DuckTalk</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
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
                    <label for="" class="label font">Email</label>
                </div>

                <div id="inputContainer">
                    <input type="text" class="input" placeholder="a" name= "password">
                    <label for="" class="label font">Password</label>
                </div>

                <div id="inputContainer">
                    <!-- <h4>Already have an account? -->
                        <a href="reset-password.php" class="login font">Forgot your password?</a></h4>
                </div>

                <div class="buttons">

                    <input type="submit" id="submitBtn" class="font" value="Back">
                    <input type="submit" id="submitBtn" class="font actBtn" value="Login">

                </div>
            </form>
        </div>
    </div>

    </section>
</body>
</html>