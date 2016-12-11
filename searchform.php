<form role="search" method="get" id="searchform"
    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">  

    <div class="row">
	    <div class="large-12 columns">
	      <div class="row collapse">
	        <div class="small-8 columns">
	        	<input type="text" value="<?php echo get_search_query(); ?>" placeholder="Search for:" name="s" id="s" style="width:100%;" /> 
	        </div>
	        <div class="small-4 columns"> 
	        	<input type="submit" id="searchsubmit" class="button btn-primary postfix" 
            value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" style="width:100%;" /> 
	        </div>
	      </div>
	    </div>
	</div>
</form>