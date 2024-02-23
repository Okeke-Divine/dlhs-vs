<?php
	if(isset($_GET['year'])){
		$year = $_GET['year'];
	}else{
		echo '<script>goto("?year='.date('Y').'&&page=home");</script>';
		die();
	}
?>
<div class="wd100 bg-dark p-3 fodksfo text-white">

		<span class="my_title main_bg">Denuguvs</span>
		<span class="title_content right">
			<button class="btn btn-outline-primary" onclick="goto('?year=<?php echo $year; ?>&&page=home');">Home</button>
			<button class="btn btn-outline-success" onclick="goto('?year=<?php echo $year; ?>&&page=gallery');">Gallery</button>
			<!-- <button class="btn btn-outline-warning" onclick="goto('?year=<?php echo $year; ?>&&page=videos');">Videos</button> -->
			<?php
				$disabled = "";
				$stream = "";
				$get_youtube_stream = mysqli_query($conn,"SELECT * FROM admin_items WHERE admin_control_title = 'YOUTUBE_STREAM' LIMIT 1");
				if(mysqli_num_rows($get_youtube_stream) > 0){
					$disabled = "";
					while($row = mysqli_fetch_array($get_youtube_stream)){
						$stream = $row['admin_control_value'];
					}
				}else{
					$disabled = "disabled";
				}
			?>
			<button class="btn btn-danger text-white" <?php echo $disabled; ?> onclick="get_youtube_stream('<?php echo $stream; ?>');">Live Stream</button>
			<?php

			?>
		</span>


	</div>