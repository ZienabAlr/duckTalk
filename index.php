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
    <link rel="stylesheet" href="css/problem.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
	
	<title>DuckTalk</title>
</head>
<body>
    
    <header>
		<?php include_once("inc/nav.inc.php"); ?>

	</header>	

    <section class="postform">

        <div class="post">
            <form method="post" action="" enctype='multipart/form-data'>

                <div>
                    <h3>What is your question?</h3>
						
                    <div class="inputveld border-bottom">
                        <input type="text" class="input" name="title" placeholder="Title" value="">
                    </div>

                    <div class="inputveld border-bottom wider">
                        <input type="text" class="input" name="explain" placeholder="Set description..." id="">
                    </div>

                    <div class="inputveld">
                        <input type="file" class="input" name="file" value="" multiple="">
                    </div>
                </div>    

                <div class="sbmt-btn">
					 <input type="submit" id="submitBtn" class="font actBtn" name="submit" value="Submit">
				</div>

               

            </form>
        </div>

		<div class="filterList">
			
			<span class="material-symbols-rounded star2">filter_list</span>

		</div>
    </section>
	<section>

		<div class="post-form">
		
			<?php foreach($posts as $onePost): ?>
				<div class="post-box">
					<form method="post" action="" class= "box">
						<article>
							<h2 class="title-text"><?php echo htmlspecialchars($onePost['title'] ) ?></h2>
							<p class="text"><?php echo htmlspecialchars($onePost['description'] ) ?></p>
							<div class="post-img">
								<img
									class="w-20"
									src="uploads/<?php echo htmlspecialchars($onePost['image'] ) ?>"
									alt=""
								/>
							</div>
							<div class="commentStar">
								<div class="commenticon">
									<!-- <i class="far fa-comment" style='color: #37C45B; font-size:40px; padding: 20px;' ></i> -->
									<!-- <a href="" class="like" data-post="<?php echo $onePost['id']?>"> ❤️like </a> -->
									<i class="fa fa-comment-o" style="font-size:40px; color: #37C45B;"></i>
								</div>

								<div class="stars">
									<!-- <span class="material-symbols-rounded star1">grade</span>
									<span class="material-symbols-rounded star2">grade</span>
									<span class="material-symbols-rounded star3">grade</span>
									<span class="material-symbols-rounded star4">grade</span>
									<span class="material-symbols-rounded star5">grade</span> -->
									<button class="star">&#9734;</button>
									<button class="star">&#9734;</button>
									<button class="star">&#9734;</button>
									<button class="star">&#9734;</button>
									<button class="star">&#9734;</button>
									<p class= "current-rating">0/5</p>

									<!-- <span class="material-symbols-rounded">star</span> -->
				
								</div>
							</div>			
						</article> 
					</form>
				</div>
			<?php ; endforeach; ?>	
		</div>	
	</section>
	<!-- <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script> -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="app.js"></script>
</body>
</html>