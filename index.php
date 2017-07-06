<?php
	#Contents of the landing page. I will first add in the header as that will contain most of the external content which is needed for the pages styling.
	include_once('header.php');
?>

<section id="bannerTop">
	<div id="bannerHome">
		<div id="bannerText">
			<h1>Cole Campbell</h1>
			<h2>Multimedia Designer with a focus on Front End Web Development</h2>
		</div>
	</div>
</section>

	<div class="flex-container">
		<section id="portfolioSection">
			<h2>Portfolio</h2>
			<p>A collection of my work through the academic and professional career. The works displayed on here represent me both as a designer and a developer. I hope you enjoy the work showcased in my portfolio as much as I do. If you wish to contact me, please email me at <a href="mailto:cole@colecampbell.design?subject=Hello%20Cole">cole@colecampbell.design</a> and I will get back to you when I can.</p>
		</section>
		<section id="gallery">
<?php
	#Setting up the query to go through the database and pull the content for my portfolio. THe content will then be added to the HTML tags to be displayed to the user.

	$stmt = $conn->prepare("SELECT * FROM development ORDER BY creationDate DESC");
	$stmt->execute();

	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		extract($row);

		echo "<div class=\"flex-galleryItem\">
					<a href=\"portfolio.php?id={$id}\">
						<img src=\"{$thumb}\" onerror=\"imgError(this);\" alt=\"{$name}\"/>
						<div class=\"overlay\">
							<div class=\"textGroup\">
								<h3>{$name}</h3>
								<h6>{$type}</h6>
							</div>
						</div>
					</a>
				</div>";
	}
?>
</section>
</div>

<?php
	#Well, now that everything has been added, I will include the footer and finish off the page.
	include_once('footer.php');
?>