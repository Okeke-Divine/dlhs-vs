<div class="denuguvs_modal" id="denuguvs_modal">
	  <div class="wd100 denuguvs_moda_head denuguvs_background text-white shadow-sm p-3 mb-2">
	  	<span id="denuguvs_modal_title"></span>
		<span class="right">
			<span class="close_denuguvs_modal fa-2x pointer" onclick="close_denuguvs_modal()">&times;</span>
		</span>
	  </div>
	<main class="container" role="main">
	  <span class="wd100" id="denuguvs_modal_content">
	  	
	  </span>
	</main>
</div>
<script type="text/javascript">
	function _(el){
		return document.getElementById(el);
	}
	function load_div(divid){
		var div = _(divid);
		div.innerHTML = "<span class='spinner-border text-primary'></span>";
	}
	function my_ajax(page,divid,loaddiv){
		var div = _(divid);
		var xhttp;
		if(loaddiv == 'loaddiv'){
			load_div(divid);
		}
		  xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
         	 div.innerHTML = this.responseText;
		    }
		  };
		  xhttp.open("GET",page, true);
		  xhttp.send();
	}
	function get_youtube_stream(stream){
		var dm = _('denuguvs_modal');
		dm.style.display = "block";
		modal_title('<div class="bg-danger text-white p-2">Denuguvs Live Stream</div>');		
		var iframe = "<iframe class='sdfsdf' src="+stream+"></iframe>";
		modal_content('<div class="dssdf">'+iframe+'</div>');
	}
	function close_denuguvs_modal(){
		var dm = _('denuguvs_modal');
		dm.style.display = "none";
		modal_title('');
		modal_content('');
	}
	function modal_title(text){
		var dmt = _('denuguvs_modal_title');
		dmt.innerHTML = text;
	}
	function modal_content(text){
		var dmc = _('denuguvs_modal_content');
		dmc.innerHTML = text;
	}
	function goto(dir){
		return window.location = dir;
	}
</script>