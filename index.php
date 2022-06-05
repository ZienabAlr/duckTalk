<?php

// echo "You loged in!";

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    
    <header>
		<?php include_once("inc/nav.inc.php"); ?>

	</header>	

    <section>

        <div>
            <form method="post" action="" enctype='multipart/form-data'>

                <div class="post">
                    <h4>What is your question?</h4>
                    <input type="text"  class="input" name ="askQuestion" placeholder="Title" value="">
                    <input type="text" class="input wider-input" name="explain" placeholder="Write what you think..." value="">
				    <input type="file" class="input" name ="file" value="" multiple="" >
						
                    <!-- <label for="" class="label font">What is your question?</label> -->
                </div>

            </form>
        </div>

    </section>
	
</body>
</html>