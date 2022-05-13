<?php

include_once("bootstrap.php");

function validateEmail($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    } else {
        if (empty(preg_match("/@student.thomasmore.be|thomasmore.be$/", $email))) {
            return false;
        } else {
            //valid//
            return true;
        }
    }
}




if (!empty($_POST)) {
    if (validateEmail($_POST["email"])) {
        try {

            $user = new Student();
            $user->setFirstname($_POST["firstname"]);
            $user->setLastname($_POST["lastname"]);
            $user->setEmail($_POST["email"]);
            $user->setPassword($_POST["password"]);

            $user->can_signup($_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["password"]);


            session_start();
            $_SESSION['user'] = $_POST["email"];
            header('location:index.php');
            die();
        } catch (Throwable $e) {

            $error = $e->getMessage();
        }
    } else {
        $error = "Email is not valid";
    }
}

?>
<!DOCTYPE html>
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
            <a class="logo" href="#"><img src="images/logo.png" alt="logo"></a>
            <div class="loginSign">
                <a class="notActiv font" href="login.php">Login</a>
                <a class="activeBtn font " href="signup.php">Sign Up</a>
            </div>
        </nav>
    </header>

    <section>

        <div id="signupForm">
            <div class="wrapper">
                <form action="" method="post" class="form">

                    <h1 class="title">Sign Up</h1>

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
                        <input type="text" class="input" placeholder="Enter your firstname" name="firstname" required="">
                        <label for="" class="label font">Firstname</label>
                    </div>
                    <div id="inputContainer">
                        <input type="text" class="input" placeholder="Enter your lastname" name="lastname" required="">
                        <label for="" class="label font">Lastname</label>
                    </div>
                    <div id="inputContainer">
                        <input type="text" class="input" placeholder="Enter your university" name="university" required="">
                        <label for="" class="label font">University</label>
                    </div>
                    <div id="inputContainer">
                        <input type="text" class="input" placeholder="Enter your study" name="study" required="">
                        <label for="" class="label font">Study</label>
                    </div>
                    <div id="inputContainer">
                        <input type="text" class="input" placeholder="a" name="password">
                        <label for="" class="label font">Password</label>
                    </div>
                    <div id="inputContainer">
                        <input type="text" class="input" placeholder="a" name="confirm password">
                        <label for="" class="label font">Confirmpassword</label>
                    </div>

                    <div id="inputContainer">
                        <!-- <h4>Already have an account? -->
                        <!--<a href="reset-password.php" class="login font">Forgot your password?</a></h4>-->

                        <a href="login.php" class="login font">
                            <h4>Already have an account?
                        </a></h4>
                    </div>

                    <div class="buttons">

                        <input type="submit" id="submitBtn" class="font" value="Back">
                        <input type="submit" id="submitBtn" class="font actBtn" value="Sign up">

                    </div>
                </form>
            </div>
        </div>

    </section>
</body>

</html>