<!DOCTYPE html>
<html lang="en-eu">
	<head>
	<?php
		$portfolio_id = $_GET['id'];
		include_once('./db.php');

		$stmt = $conn->prepare("SELECT * FROM portfolio WHERE id = :id");

		$stmt->execute(array(
			':id'=> $portfolio_id));

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

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<link rel="stylesheet" href="./css/styles.css">
		<link rel="stylesheet" href="./css/font-awesome.css">
	</head>
	
	<body>
		<div class="se-pre-con"></div>
		<div class="sideNav" id="mobileNav">
			<a class="sideNavBtn" href="./">Portfolio</a>
			<a class="sideNavBtn" href="./about">About Me</a>
			<a class="sideNavBtn" href="./contact">Contact Me</a>
			<a href="javascript:void(0);" class="closeBtn" onclick="closeNav()">
					<i class="fa fa-times"></i>
			</a>
		</div>

		<div class="top-nav" id="main-top-nav">
			<a href="./">Portfolio</a>
			<a href="./about">About Me</a>
			<a href="./contact">Contact Me</a>
		</div>

		<div id="container">
			<div class="menuBtn">
				<a href="javascript:void(0);" class="icon" onclick="openNav()">
					<i class="fa fa-bars"></i>
				</a>
			</div>