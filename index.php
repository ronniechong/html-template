<?php
	//Individual meta data
	$page_title = "Local Title";
	$page_metawords = "Local Meta Words";
	$page_metadesc = "Local Meta Description";

	//Include local scripts
	function scriptheader(){
?>
	

<?php
	}
	//This is the main content.
	function content(){ 
?>
		<section class="page-body-block">
			
			<p>Your content here. <a href="#">This is a link</a></p>

			<p><strong>This is bold</strong> and this is <em>italic</em></p>
			
			<ul>
				<li>Standard List 1</li>
				<li>Standard List 2</li>
				<li>Standard List 3</li>
			</ul>

			<ul class="fmt-list">
				<li>Unstyled List 1</li>
				<li>Unstyled List 2</li>
				<li>Unstyled List 3</li>
			</ul>

		</section>


<?php
	}
	include_once('layout.php');
?>