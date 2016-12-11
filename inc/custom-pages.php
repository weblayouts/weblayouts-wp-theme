<?php
	//Add excerpt to pages ...
	add_action('init', 'web_layouts_add_excerpts_to_pages');
	function web_layouts_add_excerpts_to_pages(){
		add_post_type_support('page', 'excerpt');
	}

?>