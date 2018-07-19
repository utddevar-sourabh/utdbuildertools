<?php 
/* Template Name: Event Template
   Template Post Type: event-description, post, page */ 
?>
<div id="baseDiv" style="max-width:640px;margin:0 auto;font-size:1rem;">
	<?php the_field('description'); ?>
</div>
<button onclick="copyToClipboard();" style="position: absolute;top: 10px;right: 10px;padding: 20px 10px;color: #FFFFFF;font-size: 16px;font-family: monospace;box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);background-color: #69be29;border: 0px;border-radius: 2px;cursor: pointer;">Copy to Clipboard</button>
<script type="text/javascript">
	var anchor_element = document.querySelectorAll(".optionalField a");
	for(i=0;i<anchor_element.length;i++){
		anchor_element[i].style = "";
		anchor_element[i].style = "text-decoration: none; color: #008542;"
	}
	function copyToClipboard(){
		var div = document.getElementById("baseDiv");
		var element = document.createElement('textarea');
		element.value = div.outerHTML;
		document.body.appendChild(element);
		element.select();
		document.execCommand('copy');
		document.body.removeChild(element);
		alert('Swoosh!! Copied to your clipboard.');
	}
	window.addEventListener('keydown', function (e) {
		if (event.ctrlKey === true && event.key==="c") {
			copyToClipboard();
		}
	});
</script>