<?php


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>DuckTalk</title>
</head>
<body>
    
    <header>
		<?php include_once("inc/nav.inc.php"); ?>

	</header>	

    <section>

        <div class="postform">
            <form method="post" action="" enctype='multipart/form-data'>

                <div class="post">
                    <h4>What is your question?</h4>
						
                    <div class="inputveld border-bottom">
                        <input type="text" class="input" name="ask" placeholder="Title" value="">
                    </div>

                    <div class="inputveld border-bottom wider">
                        <input type="text" class="input" name="" placeholder="Set description..." id="">
                    </div>

                    <div class="inputveld">
                        <input type="file" class="input" name="file" value="" multiple="">
                    </div>

                </div>

            </form>
        </div>

    </section>
	
</body>
</html>