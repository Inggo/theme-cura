<?php namespace Inggo\WordPress;

use Inggo\Helpers\YouTubeHelper;

class ThemeHelper extends YouTubeHelper
{
    /**
     * Get the correct <title> tag contents
     * @global string  $s  Search query
     * @return string      Correct <title> tag contents
     */
    public function getTitleTag()
    {
        ob_start();
        if (function_exists('is_tag') && is_tag()) {
            echo 'Tag Archive for &quot;'.$tag.'&quot; - ';
        } elseif (is_archive()) {
            echo ' Archive - ';
        } elseif (is_search()) {
            global $s;
            echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';
        } elseif (is_404()) {
            echo 'Not Found - ';
        } elseif (!is_front_page()) {
            wp_title('');
            echo ' - ';
        }
        bloginfo('name');
        $title = ob_get_contents();
        ob_end_clean();
        return $title;
    }
}
