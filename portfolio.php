<?php
	$portfolio_id = $_GET['id'];


	include_once('header.php');
?>

	<div class="flex-container">

<?php
	#Setting up the query to go through the database and pull the content for my portfolio. THe content will then be added to the HTML tags to be displayed to the user.

	$stmt = $conn->prepare("SELECT * FROM development WHERE id = :id");

	$stmt->execute(array(
		':id'=> $portfolio_id));

	if ($stmt->rowCount() == 1){
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		extract($row);

		if($codePenLink != null) {
			$codeLink = "<a href=\"{$codePenLink}\" target=\"_blank\"><i class=\"fa fa-codepen fa-2x\"></i></a>";
		} else{

		}

		if($githubLink != null){
			$gitLink = "<a href=\"{$githubLink}\" target=\"_blank\"><i class=\"fa fa-github fa-2x\"></i></a>";
		} else{

		}

		if($externalLink != null){
			$extLink = "<a href=\"{$externalLink}\" target=\"_blank\"><i class=\"fa fa-external-link fa-2x\"></i></a>";
		} else{ }

		if($vimeoLink != null){
			$vimLink = "<a href=\"{$vimeoLink}\" target=\"_blank\"><i class=\"fa fa-vimeo fa-2x\"></i></a>";
		} else{ }


		echo "<div id=\"topPortfolio\">
			<h1>{$name}</h1>
			<h6>{$type}</h6>";

		if($filetype == "image"){
			echo "<img class=\"centerContent\" src=\"{$url}\" alt=\"{$name}\">";
		} elseif ($filetype == "video"){
			echo "<iframe class=\"centerVideoContent\" src=\"{$url}\" allowfullscreen></iframe>";
		} elseif($filetype == "web"){
			echo "<a href=\"{$externalLink}\" target=\"_blank\"><img class=\"centerContent\" src=\"{$url}\" alt=\"{$name}\"></a>";	
		} else {
			echo "<a href=\"{$url}.pdf\" target=\"_blank\"><img class=\"centerContent\" src=\"{$url}.jpg\" alt=\"{$name}\"></a> ";
		}
		
		echo "<hr/></div>";

#Add this once all descriptions have been added to the database.

			echo "
			<div>
				<p class=\"socialMedia\">";
					
					if(isset($codeLink)){
						echo"{$codeLink}";
					} 
					if(isset($gitLink)){
						echo"{$gitLink}";
					}
					if(isset($vimLink)){
						echo"{$vimLink}";
					}
					if(isset($extLink)){
						echo"{$extLink}";
					}
				echo "</p>
				<div id=\"desc\">
					{$desc}
				</div>
				</div>
			</div>";

		}
		#While statement has closed
	}

	else{
		echo "
		<h1 class=\"text-center\">UH OH!</h1>

		<h2 class=\"text-center\">Looks like you stumbled off the map.
		<br/><br/>
		Press back in browser, or <a href=\"index.php\">click here</a> to return to good looking page.</h2>
	
		";
	}
	#If ($stmt->rowCount() == 1{}) statement has closed

?>

<?php
	#Well, now that everything has been added, I will include the footer and finish off the page.
	#Analytics include has been moved to Footer ensure it is called only in one place.
	include_once('footer.php');
?>