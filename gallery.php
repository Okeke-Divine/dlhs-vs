<div class="bg-success p-2 text-light">
	Gallery
	<span class="right">
		<button class="dsfdsf btn btn text-light" onclick="get_gallery();">
			<i class="fa fa-redo-alt"></i>
		</button>
	</span>
</div>
<div id="my_gallery" class="mt-1"></div>
<script type="text/javascript">
	function get_gallery(){
		my_ajax('gallery_main.php?my_vs_id=<?php echo $my_vs_id; ?>','my_gallery','noloaddiv');
	}
	my_ajax('gallery_main.php?my_vs_id=<?php echo $my_vs_id; ?>','my_gallery','loaddiv');
</script>