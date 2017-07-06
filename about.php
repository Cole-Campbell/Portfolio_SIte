<?php
	include_once('header.php');
?>
<section id="bannerTop">
	<div id="bannerHome">
		<div id="bannerText">
			<h1>About Me</h1>
			<h2>Who is Cole Campbell?</h2>
		</div>
	</div>
</section>
	<div class="flex-container">
		<div class="pageContainer">
		<section id="aboutCopy">
			<img id="profile" src="./media/portrait-web.jpg" alt="Cole Campbell">
			<p>I am a Multimedia Designer with an eye for design and an aptitude for coding. I recently graduated from the Limerick Institute of Technology with my Bachelor of Science (Honours) Degree in Creative Multimedia. I also obtained my Advanced Diploma in Multimedia Design from Durham College in 2014.</p>
			<p>Most recently, I completed a wonderful placement with Ireland Chauffeur Travel in Cashel as a Multimedia Specialist. Before I pursued my Honours Degree I worked for Iconic Group in Toronto as a Web Admin Specialist. Through my academic career, I pursued the opportunity to work in the Centre for Academic Faculty Enrichment as a Multimedia Assistant to further refine my skills.</p>
			<p>During my free time I create new personal projects to build my portfolio and further build upon and refine my skills, learn new development languages (I am currently learning Ruby and Rails), keep my eyes open for inspiration through social media and everyday things, and I can be found doing all of these things with a coffee or tea at the ready.</p>
		</section>
		<section id="experience">
			<div id="shove">
				<h2>Work Experience</h2>
				<div class="flex-experience"><img src="./media/Durham-Profile.png">
					<h3>Durham College</h3>
					<p>While attending Durham College I worked as a Multimedia Assistant for the Centre for Academic Faculty Enrichment. I aided the Multimedia Specialist with projects to assist faculty in the classroom.</p>
				</div>
				<div class="flex-experience"><img src="./media/Toronto-Profile.png">
					<h3>Iconic Group</h3>
					<p>In Toronto, I worked for Iconic Group as a Web Admin Specialist. In this role I ensured that client needs were fulfilled, developed designs for project meetings, and aided in development and deployment of websites.</p>
				</div>
				<div class="flex-experience clearfix"><img src="./media/Cashel-Profile.png">
					<h3>Ireland Chauffeur Travel</h3>
					<p>I worked with Ireland Chauffeur Travel in Cashel as a Multimedia Placement Student. During my placement I assisted with the maintenance of the website and designed a new and lively itinerary for clients.</p>
				</div>
			</div>
		</section>
		</div>
	</div>

<?php
	#Well, now that everything has been added, I will include the footer and finish off the page.
	include_once("footer.php");
?>