<?php
	#Contents of the landing page. I will first add in the header as that will contain most of the external content which is needed for the pages styling.
	include_once('header.php');
?>

	<div class="flex-container">

			<h2>Portfolio</h2>
			<p>A collection of my work through the academic and professional career. The works displayed on here represent me both as a designer and a developer. I hope you enjoy the work showcased in my portfolio as much as I do. If you wish to contact me, please email me at <a href="mailto:cole@colecampbell.design?subject=Hello%20Cole">cole@colecampbell.design</a> and I will get back to you when I can.</p>

<?php
	#Setting up the query to go through the database and pull the content for my portfolio. THe content will then be added to the HTML tags to be displayed to the user.

	$stmt = $conn->prepare("SELECT * FROM development ORDER BY creationDate DESC");
	$stmt->execute();

	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		extract($row);

		echo "<div id=\"gallery\" class=\"col-4 flex-galleryItem\">
					<a href=\"portfolio.php?id={$id}\">
						<img class=\"img-responsive thisImg center-block\" src=\"{$thumb}\" onerror=\"imgError(this);\" alt=\"{$name}\"/>
						<h4>{$name}</h4>
					</a>
				</div>";
	}
?>
</div>

<?php
	#Well, now that everything has been added, I will include the footer and finish off the page.
	include_once('footer.php');
?>