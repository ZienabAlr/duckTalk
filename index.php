<?php


include_once("bootstrap.php");
$conn = Db::getConnection();

if(isset($_POST['submit'])){

	$post= new Post(); 
        
	$title= $post->setTitle($_POST["title"]);
	$description= $post->setDescription($_POST["explain"]);
	//upload een afbeelding/document
	
	$img_name= $_FILES['file']['name'];
	$tmp_name= $_FILES['file'][ 'tmp_name'];
	$img_size=$_FILES['file']['size'];

	if($img_size > 5000000){

		$message= "Sorry, your file is too large.";
	}else{
		$upload_dir='uploads/';
		$imgExt=strtolower(pathinfo($img_name,PATHINFO_EXTENSION));
		// echo($imgExt);

		$valid_extensions= ['jpeg', 'jpg', 'png', 'gif', 'pdf'];
		$picProfile=rand(1000,1000000).".".$imgExt;
		move_uploaded_file($tmp_name,$upload_dir.$picProfile);
		$image= $post->setImage($picProfile);
		$post->create_post();
	}


}
$posts = Post::show_post();


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
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
                    
                    <div class="sbmt-btn">
					    <input type="submit" id="submitBtn" class="font actBtn" name="submit" value="Post">
				    </div>

                </div>

            </form>
        </div>

    </section>
	
</body>
</html>