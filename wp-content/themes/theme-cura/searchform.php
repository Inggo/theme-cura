<form role="search" method="get" id="searchform" class="searchform" action="<?=esc_url(home_url('/'));?>">
    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search...">
    <button type="submit"><span class="glyphicon glyphicon-search"></span></button>
</form>