<!-- Links for CSS -->
<link rel="stylesheet" type="text/css" href="./assets/css/videoSection.css">

<section id='video-section'>
	<h1 class='center title font'>Video Area</h1>
	<?php foreach ($projects as $project): ?>
		<div class='video-div'>
			<div>
				<iframe width="300" height="170" src="<?php echo $project['videoLink'];; ?>" frameborder="0" allowfullscreen></iframe>
			</div>
			<div>
					<h3 class='center font video_title'><?php echo $project['title']; ?></h3>
			</div>
		</div>
	<?php endforeach; ?>
</section>
