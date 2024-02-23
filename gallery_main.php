<?php

	$my_vs_id = $_GET['my_vs_id'];
	include("conn.php");	
	 // JOIN vs ON vs.vs_id = vs_images.vs_id ORDER BY vs.vs_date DESC
	$get_images = mysqli_query($conn,"SELECT *  FROM vs_images WHERE vs_id = '$my_vs_id'");
	$total = 0;
	if(mysqli_num_rows($get_images) > 0){
		echo '<div class="row">';
		while($row = mysqli_fetch_array($get_images)){
			$total = $total+1;
			$vs_image_id = $row['vs_image_id'];
			$vs_id = $row['vs_id'];
			$image_name = $row['image_name'];
			$get_vs = mysqli_query($conn,"SELECT * FROM vs WHERE vs_id = '$vs_id'");
			while($row1 = mysqli_fetch_array($get_vs)){
				$vs_date = $row1['vs_date'];
				$vs_date_2 = $row1['vs_date_2'];
			}
			?>
			<div class="m-2 p-2 col-3-md">
				<img class="oejfsdf" src="site_images/<?php echo $image_name; ?>">
				<br>
				<span title="<?php echo $vs_date; ?>"><?php echo $vs_date_2; ?></span>
			</div>
			<?php
		}
		echo "</div>";
	}
	if($total == 0){
		?>
		<div class="alert alert-danger">
			No image found.
		</div>
		<?php
	}

?>