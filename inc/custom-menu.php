<?php
	//Add first items to "pages" and "categories" menu
	// add_filter( 'wp_nav_menu_items', 'menupages_title', 10, 2 );
	// add_filter( 'wp_nav_menu_items', 'menucategories_title', 10, 2 );

	//...
	function menupages_title ( $items, $args ) {
    	if ($args->theme_location == 'menu-1') { 
    		$firstItem = '<li>'.__('Web Layout Pages','web_layouts').'</li>';
    		$firstItem .= $items;
    		$items = $firstItem;
    	} 
    	return $items; 
	} 

	//...
	function menucategories_title ( $items, $args ) {
    	if ($args->theme_location == 'menu-2') { 
    		$firstItem = '<li>'.__('Categories','web_layouts').'</li>';
    		$firstItem .= $items;
    		$items = $firstItem;
    	} 
    	return $items; 
	} 





    class Walker_menu_cat_filter extends Walker { 
        // Tell Walker where to inherit it's parent and id values
        var $db_fields = array(
            'parent' => 'menu_item_parent', 
            'id'     => 'db_id' 
        );

        /**
         * Add "data-filter" attribute for every link.
         * This will contain category's hyphenated title
         */
        function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) { 
            if( $args->menu->name == 'Menu of Categories' ){
                $cat_filter = str_replace(' ', '-', strtolower ( $item->title )); 
                $output .= sprintf( "\n<li><a data-filter='category-%s' href='%s' class='button button--small button--round button--yde cat-filter %s'>%s</a></li>\n",
                    $cat_filter,
                    $item->url,
                    ( strtolower($item->title) === 'all' ) ? 'current' : '',
                    $item->title
                );
            } 
        } 
    }


?>