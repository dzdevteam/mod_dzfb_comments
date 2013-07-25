<?php
// no direct access
defined('_JEXEC') or die;

abstract class modDZFacebookCommentsHelper
{
    public static function getDataAttribs($params) {
        $data = array();
        
        # href
        $href = JUri::current();
        $data[] = "data-href=\"$href\"";
        
        # Box width
        $width = (int) $params->get('width', 470);
        if ($width)
            $data[] = "data-width=\"$width\"";
        
        # Number of posts
        $num_posts = (int) $params->get('num_posts', 10);
        if ($num_posts)
            $data[] = "data-num-posts=\"$num_posts\"";
        
        # Color scheme
        $colorscheme = $params->get('colorscheme', 'light');
        $data[]="data-colorscheme=\"$colorscheme\"";
        
        return implode(" ", $data);
    }
}
