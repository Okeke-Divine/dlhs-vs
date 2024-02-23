<!-- https://youtu.be/PZY-hB2C_Iw -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Denuguvs</title>
	<link rel="stylesheet" type="text/css" href="font/css/all.css">
	<link rel="stylesheet" type="text/css" href="font/css/v4-shims.css">
	<link rel="stylesheet" type="text/css" href="font/css/svg-with-js.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<script type="text/javascript" src="js/sweetalert.js"></script>

	<?php
	include("conn.php");include("css.php");include("js.php");
	?>
</head>
<body>

	<?php
		include("header.php");
		@$page = $_GET['page'];
		if(empty($page)){
			echo '<script>goto("?year='.date('Y').'&&page=home");</script>';
			die();
		}
	?>	
	

	<br><br><br>
	<div class="fdojkfos wd100 p-2 text-primary">
		<marquee>
			Welcome to Deeper Life High School Enugu Campus Where Distinction Is Our Goal...
		</marquee>
	</div>
	<div class="wd100 navbar mt-1 pl-1 pr-1">
		<button class="btn btn-primary" onclick="goto('?year=<?php echo $year-1; ?>&&page=<?php echo $page; ?>');"><i class="fa fa-angle-left text-light"></i></button>
		<b><?php echo $year; ?> VS</b>
		<button class="btn btn-primary" onclick="goto('?year=<?php echo $year+1; ?>&&page=<?php echo $page; ?>');"><i class="fa fa-angle-right text-light"></i></button>
	</div>



	<hr>

	<main class="container" role="main">
		<?php
		if($year > date('Y')){
			echo '<script>goto("?year='.date('Y').'&&page='.$page.'");</script>';
		}else if($year < 2017){
			echo '<script>goto("?year=2017&&page='.$page.'");</script>';
		}

		$my_vs_id = "";
		$get_vs_with_date = mysqli_query($conn,"SELECT * FROM vs WHERE vs_date = '$year'");
		if(mysqli_num_rows($get_vs_with_date) > 0){
			while($my_row = mysqli_fetch_array($get_vs_with_date)){
				$my_vs_id = $my_row['vs_id'];
			}
		}

			
			if($page == 'home'){
				include("home.php");
			}else if($page == 'gallery'){
				include("gallery.php");
			}else if($page == 'videos'){
				include("videos.php");
			}else{
				include("home.php");
			}

		?>
	</main>


</body>
</html>

