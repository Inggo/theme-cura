<?php
/**
 * Default Page template
 *
 * @author  Inggo Espinosa <inggo.espinosa@gmail.com
 * @since   1.0
 */

get_header();
?>
<div class="content-divider"></div>
<?php

get_template_part('loop', 'page');

get_footer();