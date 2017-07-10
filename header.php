<!DOCTYPE html>
<html lang="en-eu">
	<head>
	<?php
		
		if(isset($_GET['id'])){
			$portfolio_id = $_GET['id'];
		}
		include_once('../db.php');

		$stmt = $conn->prepare("SELECT * FROM development WHERE id = :id");

		if(isset($_GET['id'])){
			$stmt->execute(array(
				':id'=> $portfolio_id));
		}

		if ($stmt->rowCount() == 1){
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
			extract($row);

			echo "<title>{$name} &middot; Cole Campbell</title>";
			echo "<meta charset=\"UTF-8\">";
			$metaDesc = substr($desc, 0, 200);
			echo "<meta name=\"description\" content=\"$metaDesc\">";
			
			echo "<meta name=\"keywords\" content=\"{$type}\">";

			echo "<meta name=\"author\" content=\"Cole Campbell\">";
			echo "<link rel=\"alternate\" href=\"http://colecampbell.design/portfolio.php?id={$id}\" hreflang=\"en-eu\"/>";
			}
		} else{
			echo "<title>Cole Campbell &middot; Multimedia Designer</title>";
			echo "<meta charset=\"UTF-8\">";
			echo "<meta name=\"description\" content=\"As a Multimedia Designer, I have a vast range of skills including web development, web design, print design, GIF animation, and photo manipulation. Feel free to look at my portfolio, or to contact me if you would like.\">";
			
			echo "<meta name=\"keywords\" content=\"Multimedia Designer, Cork, Ireland, Developer, Designer\">";

			echo "<meta name=\"author\" content=\"Cole Campbell\">";
			echo "<link rel=\"alternate\" href=\"http://colecampbell.design\" hreflang=\"en-eu\"/>";
		}	
	?>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
		<link rel="icon" href="./favicon.ico" >
		<link rel="apple-touch-icon" sizes="57x57" href="./media/apple/apple-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="./media/apple/apple-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="./media/apple/apple-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="./media/apple/apple-icon-144x144.png" />	

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

		<script async src="./js/script.js"></script>

		<link rel="stylesheet" href="./css/styles.min.css">
	</head>
	
	<body>
		<div class="se-pre-con"></div>
			<div class="sideNav" id="mobileNav">
				<a class="sideNavBtn" href="./">Portfolio</a>
				<a class="sideNavBtn" href="./about.php">About Me</a>
				<a class="sideNavBtn" href="./contact.php">Contact Me</a>
				<a href="javascript:void(0);" class="closeBtn" onclick="closeNav()">
					<p>Close</p>
				</a>
			</div>

			<div class="topNav" id="main-top-nav">
				<div id="rightAlign">
					<a class="links" href="./">Portfolio</a>
					<a class="links" href="./about.php">About Me</a>
					<a class="links" href="./contact.php">Contact Me</a>
				</div>
			</div>
			<div id="menuBtn">
					<a href="javascript:void(0);" class="icon" onclick="openNav()">
						<p>Menu</p>
					</a>
				</div>
			<div id="container">