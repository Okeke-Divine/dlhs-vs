<?php

		$get_vs = mysqli_query($conn,"SELECT * FROM vs WHERE vs_date = '$year' and deleted = '0' ORDER BY vs_date DESC LIMIT 0,1");
		if(mysqli_num_rows($get_vs) > 0){

			while($row = mysqli_fetch_assoc($get_vs)){
				$vs_id = $row['vs_id'];
				$vs_date = $row['vs_date'];
				$vs_date_2 = $row['vs_date_2'];
					$get_vs_media = mysqli_query($conn,"SELECT * FROM vs_items WHERE vs_id = '$vs_id' LIMIT 1");
					while($row1 = mysqli_fetch_assoc($get_vs_media)){
						$vs_items_id = $row1['vs_items_id'];
						$vs_background_image = $row1['vs_background_image'];
					}
				?>

				<div class="sdfksdfo mb-4 shadow-sm wd100 p-2">

					<center>
						<span class="sdfsd9fi0 text-danger" style="font-size: 40px;"><b><?php echo $vs_date_2; ?> - Valedictory Service</b></span>
					</center>
					<img class="wd100" src="vs_images/<?php echo $vs_background_image; ?>" alt="DLHS <?PHP ECHO $vs_date_2; ?>'s vs background">
</div>
	<hr>
					<span class="sdfksdofksod">Students</span>
					<marquee>
					<div class="rowssd wd100 ml-1">
						<?php
							$get_vs_students = mysqli_query($conn,"SELECT * FROM vs_students WHERE vs_id = '$my_vs_id'");
							while($row_students = mysqli_fetch_array($get_vs_students)){
								$vs_student_id = $row_students['vs_student_id'];
								$vs_id = $row_students['vs_id'];
								$student_name = $row_students['student_name'];
								$student_picture = $row_students['student_picture'];
								$student_bio = $row_students['student_bio'];
								$student_bio1 = $student_bio;
								if(strlen($student_bio) > 10){
									$student_bio1 =  substr($student_bio,0,15)."...";
								}else{
									$student_bio1 = $student_bio;
								}
								$student_gender = $row_students['student_gender'];
								$student_likes = $row_students['student_likes'];
								$student_dislikes = $row_students['student_dislikes'];
								$student_mentor = $row_students['student_mentor'];
								$student_phonenumber = $row_students['student_phonenumber'];
								$student_career = $row_students['student_career'];
								$student_i_quote = $row_students['student_i_quote'];
								if($student_gender == 'male' && $student_picture == ''){
									$student_picture = 'boy.png';
								}else if($student_gender == 'female' && $student_picture == ''){
									$student_picture = 'girl.png';
								}
								if($student_phonenumber == ""){
									$student_phonenumber = 'null';
								}
								if($student_likes == ''){
									$student_likes = 'null';
								}
								if($student_dislikes == ''){
									$student_dislikes = 'null';
								}
								if($student_mentor == ''){
									$student_mentor = 'null';
								}
								if($student_career== ''){
									$student_career = 'null';
								}
								if($student_i_quote == ''){
									$def_quote = "";
								}else{
									$def_quote = "<br><b>Quote: </b>".$student_i_quote;
								}
								?>
								<div class="col-4-md dfsksdmf p-2" onclick="get_profile('<center><img class=img-thumbnail src=vs_student_picture/<?php echo $student_picture ;?> style=width:400px;height:400px;><br><?php echo $student_name; ?></center>','<hr><div class=wd100 text-left><b>Bio: </b> <?php echo $student_bio; ?><br><b>Gender: </b> <?php echo $student_gender; ?><br><b>Likes: </b><?php echo $student_likes; ?><br><b>Dislikes: </b><?php echo $student_dislikes; ?><br><b>Mentor: </b><?php echo $student_mentor; ?><br><b>Career: </b><?php echo $student_career; ?><br><b>Phone Number: </b><?php echo $student_phonenumber; ?><?php echo $def_quote;?></div><hr>');">
									<div class="content">
										<div class="top">
											<img src="vs_student_picture/<?php echo $student_picture; ?>" alt="<?php echo $student_name; ?>">
										</div>
										<div class="bottom">
											<center>
												<div class="fdso99fssdfsdf">
													<b><?php echo $student_name;?></b>
												</div>
												<div class="fdso99fs">
													<b><?php echo $student_bio1;?></b>
												</div>
											</center>
										</div>
									</div>
								</div>
								<?php
							}
						?>
					</div>
					</marquee>
					<hr>

				<?php
			}


		}else{
			?>
			<div class="alert alert-danger p-2 br-5 wd100">
				V.S. <b><?php echo $year; ?></b> not found.
			</div>
			<style type="text/css">
				.dsofosdfjosdjfo{
					position: fixed;
					bottom: 0;
					left:0;
				}
			</style>
			<?php
		}

		?>
		<?php

		include("footer.php");

		?>
<script type="text/javascript">
	function get_profile(name,bio){
		swal.fire(name,bio);
	}
</script>