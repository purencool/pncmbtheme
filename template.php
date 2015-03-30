<?php
/*
  Preprocess
*/

/*
function NEWTHEME_preprocess_html(&$vars) {
  //  kpr($vars['content']);
}
*/
//*


function pncmbtheme_preprocess_html(&$vars,$hook) {
  //-- Add js to a certain page
  /*
  $path = drupal_get_path_alias();
  $site_path = base_path();
  $pattern = "path-alias-eg-basic/*";
  if (drupal_match_path($path, $pattern)) {
    drupal_add_js('sites/all/libraries/path/to/js/file', 'file');
    drupal_add_js(drupal_get_path('theme', 'pncmbtheme_com')'js/the-js-file.js', 'file');
  }
  //*/

  //*
  $path = drupal_get_path_alias();
  $site_path = base_path();
  $pattern = "our-gallery";
  if (drupal_match_path($path, $pattern)) {
   drupal_add_js('sites/all/libraries/colorbox/jquery.colorbox-min.js', 'file');
  }
 //*/



  //typekit
  //drupal_add_js('http://use.typekit.com/XXX.js', 'external');
  //drupal_add_js('try{Typekit.load();}catch(e){}', array('type' => 'inline'));

  //webfont
  //drupal_add_css('http://cloud.webtype.com/css/CXXXX.css','external');

  //googlefont
  drupal_add_css('http://fonts.googleapis.com/css?family=Roboto:400,500,300','external');
  drupal_add_css('http://fonts.googleapis.com/css?family=Open+Sans:400,700','external');
  drupal_add_css('http://fonts.googleapis.com/css?family=Raleway:400,700','external');
}






function pncmbtheme_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form'  || $form_id == 'search_form') {
    //$form['search_block_form']['#title'] = t('Search'); // Change the text on the label element
    //$form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
    //$form['search_block_form']['#size'] = 40;  // define size of the textfield
    //$form['search_block_form']['#default_value'] = t('Search'); // Set a default value for the textfield
    $form['actions']['submit']['#value'] =  decode_entities('&#xf002;'); // Change the text on the submit button
    //$form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images/search-button.png');

    // Add extra attributes to the text box
    //$form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";
    //$form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
    // Prevent user from searching the default text
    //$form['#attributes']['onsubmit'] = "if(this.search_block_form.value=='Search'){ alert('Please enter a search'); return false; }";

    // Alternative (HTML5) placeholder attribute instead of using the javascript
    //$form['search_block_form']['#attributes']['placeholder'] = t('Search');
  }
}


//*/
/*
function NEWTHEME_preprocess_region(&$vars,$hook) {
  //  kpr($vars['content']);
}
*/
/*
function NEWTHEME_preprocess_block(&$vars, $hook) {
  //  kpr($vars['content']);

  //lets look for unique block in a region $region-$blockcreator-$delta
   $block =
   $vars['elements']['#block']->region .'-'.
   $vars['elements']['#block']->module .'-'.
   $vars['elements']['#block']->delta;

  // print $block .' ';
   switch ($block) {
     case 'header-menu_block-2':
       $vars['classes_array'][] = '';
       break;
     case 'sidebar-system-navigation':
       $vars['classes_array'][] = '';
       break;
    default:

    break;

   }


  switch ($vars['elements']['#block']->region) {
    case 'header':
      $vars['classes_array'][] = '';
      break;
    case 'sidebar':
      $vars['classes_array'][] = '';
      $vars['classes_array'][] = '';
      break;
    default:

      break;
  }

}
*/
/*
function NEWTHEME_preprocess_node(&$vars,$hook) {
  //  kpr($vars['content']);

  // add a nodeblock
  // in .info define a region : regions[block_in_a_node] = block_in_a_node
  // in node.tpl  <?php if($noderegion){ ?> <?php print render($noderegion); ?><?php } ?>
  //$vars['block_in_a_node'] = block_get_blocks_by_region('block_in_a_node');
}
*/
/*
function NEWTHEME_preprocess_comment(&$vars,$hook) {
  //  kpr($vars['content']);
}
*/
/*
function NEWTHEME_preprocess_field(&$vars,$hook) {
  //  kpr($vars['content']);
  //add class to a specific field
  switch ($vars['element']['#field_name']) {
    case 'field_ROCK':
      $vars['classes_array'][] = 'classname1';
    case 'field_ROLL':
      $vars['classes_array'][] = 'classname1';
      $vars['classes_array'][] = 'classname2';
      $vars['classes_array'][] = 'classname1';
    case 'field_FOO':
      $vars['classes_array'][] = 'classname1';
    case 'field_BAR':
      $vars['classes_array'][] = 'classname1';
    default:
      break;
  }

}
*/
/*
function NEWTHEME_preprocess_maintenance_page(){
  //  kpr($vars['content']);
}
*/
/*
function NEWTHEME_form_alter(&$form, &$form_state, $form_id) {
  //if ($form_id == '') {
  //....
  //}
}
*/
