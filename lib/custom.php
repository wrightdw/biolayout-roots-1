<?php

// Custom functions

/* Create additional buttons for the TinyMCE editor
* @author Derek 
*/
function enable_more_buttons($buttons) {
  $buttons[] = 'hr'; //horizontal rule
  $buttons[] = 'sub'; //subscript
  $buttons[] = 'sup'; //superscript
//  $buttons[] = 'fontselect';
//  $buttons[] = 'fontsizeselect';
  $buttons[] = 'cleanup'; //cleanup messy code
//  $buttons[] = 'styleselect';
 
  return $buttons;
}

add_filter("mce_buttons_2", "enable_more_buttons"); //add buttons to 2nd row of TinyMCE editor