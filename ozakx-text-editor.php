<?php
/*
Plugin Name: Ozakx Text Editor
Plugin URI: http://www.anuragbhateja.com/wordpress/ozakx-text-editor.html
Description: With this plugin, you can add link, tooltip, style to any word in the post/page/comment
Version: 1.0
Author: Anurag Bhateja
Author URI: http://www.anuragbhateja.com
*/ 


function ozakx_link_editor($text) {
/* 
To add link use the following syntex
        $text = preg_replace('"Word/Phrase"','<b><a title="Title Comes Here" target="_blank" href="http://www.yourdomain.com/link,html">Word/Phrase Again</a></b>',$text);

To add Bold with tooltip use the following syntex
        $text = preg_replace('"Word/Phrase"','<b title="Tootip title">Word/Phrase Again</b>',$text);

To add Italic with tooltip use the following syntex
        $text = preg_replace('"Word/Phrase"','<i title="Tootip title">Word/Phrase Again</i>',$text);

To add Underline with tooltip use the following syntex
        $text = preg_replace('"Word/Phrase"','<u title="Tootip title">Word/Phrase Again</u>',$text);

You can also use combinations like of bold with italic and underline. A little HTML knowledge can make you control better.
*/


        $text = preg_replace('"Ozakx Text Editor"','<u title="Wordpress Plugin Provided By Ozakx Technologies - Developed By Anurag Bhateja">Ozakx Text Editor</u>',$text);

    return $text;

}

// Highlight text and comments:
add_filter('the_content', 'ozakx_link_editor');
add_filter('comment_text', 'ozakx_link_editor');

?>