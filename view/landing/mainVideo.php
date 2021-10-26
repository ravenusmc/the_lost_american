<?php 
	
	//Pulling in the databases
	require('./model/database.php');

	global $db;
	$query = 'SELECT *
						FROM projects
						ORDER BY id DESC';
	$statement = $db->prepare($query);
	$statement->execute();
	$projects = $statement->fetchAll();
	$statement->closeCursor();
	$mainVideo = $projects[0];

?>

<!-- Links for CSS -->
<link rel="stylesheet" type="text/css" href="./assets/css/mainVideo.css">

<!-- Main Video Section-->
<section id='main-video-section'>
	<h1 class='title font'>Latest Video:</h1>
	<div>
  	<iframe width="700" height="395" src="<?php echo $mainVideo['videoLink'];; ?>" frameborder="0" allowfullscreen></iframe>
  </div>
	<div>
		<h1 class='video_title font'>
			<?php echo $mainVideo['title']; ?>
		</h1>
	</div>
</section>

<hr>