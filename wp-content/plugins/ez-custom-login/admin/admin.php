<?php

//include the main class file
require_once("admin-page-class.php");

/**
* configure your admin page
*/
$config = array(    
'menu'=> 'settings',
'page_title' => 'EZ Custom Login',
'capability' => 'edit_themes',
'option_group' => 'ez_login_options',
'id' => 'admin_page', 
'fields' => array(),
'local_images' => false,
'use_with_theme' => false 
);  
  
  /**
   * Initiate your admin page
   */
  $options_panel = new BF_Admin_Page_Class($config);
  $options_panel->OpenTabs_container('');
  
  /**
   * define your admin page tabs listing
   */
  $options_panel->TabsListing(array(
    'links' => array(
    'options_1' =>  __('Main Options'),
    'options_2' =>  __('Input Styling'),
    'options_3' => __('Advanced Options'),
    )
  ));
  
  /**
   * Open admin page first tab
   */
  $options_panel->OpenTab('options_1');

  $options_panel->Title("Main Options");

  $options_panel->addCheckbox('activate',array('name'=> 'Activate Custom Styling', 'std' => true));
  $options_panel->addColor('bg_color',array('name'=> 'Main BG Color'));
  $options_panel->addImage('bg_image',array('name'=> 'Main BG Image','preview_height' => '120px', 'preview_width' => '310px'));
  $options_panel->addCheckbox('stretch',array('name'=> 'Strech Image To Screen', 'std' => true));

  $options_panel->addImage('logo_image',array('name'=> 'Logo Image - 310px X 70px','preview_height' => '70px', 'preview_width' => '310px'));

  $options_panel->addColor('form_bg_color',array('name'=> 'Form BG Color'));
  $options_panel->addColor('form_label_color',array('name'=> 'Form Label Color'));
  $options_panel->addColor('form_border_color',array('name'=> 'Form Border Color'));
  $options_panel->addText('form_border_thickness',array('name'=> 'Form Border Thickness', 'std'=> '5'));
  $options_panel->addText('form_border_radius',array('name'=> 'Form Border Radius', 'std'=> '5'));

  $options_panel->addCheckbox('hide_nav',array('name'=> 'Hide Register/Forgot PW/Back to Blog Links', 'std' => false));
  $options_panel->addColor('nav_links_color',array('name'=> 'Register/Forgot PW/Back to Blog Link Color'));
  $options_panel->addColor('nav_links_color_h',array('name'=> 'Register/Forgot PW/Back to Blog Link Hover Color'));


  /**
   * Close first tab
   */   
  $options_panel->CloseTab();

  $options_panel->OpenTab('options_2');

  $options_panel->Title("Input Styling Options");
  $options_panel->addColor('input_bg_color',array('name'=> 'Input Box BG Color'));
  $options_panel->addColor('input_text_color',array('name'=> 'Input Box Text Color'));
  $options_panel->addColor('input_border_color',array('name'=> 'Input Box Border Color'));
  $options_panel->addColor('input_border_color_h',array('name'=> 'Input Box Border Hover/Current'));

  $options_panel->addColor('submit_bg_color',array('name'=> 'Submit Button BG Color'));
  $options_panel->addColor('submit_text_color',array('name'=> 'Submit Button Label Color'));
    $options_panel->addColor('submit_bg_color_h',array('name'=> 'Submit Button BG Hover Color'));
  $options_panel->addColor('submit_text_color_h',array('name'=> 'Submit Button Label Hover Color'));
  $options_panel->addText('submit_radius',array('name'=> 'Submit Border Radius', 'std'=> '5'));

  $options_panel->CloseTab();

  /**
   * Open admin page 3rd tab
   */
  $options_panel->OpenTab('options_3');

  $options_panel->Title("Advanced Options");

  $options_panel->addTextarea('custom_css',array('name'=> 'Custom CSS', 'std'=> ''));
  /**
   * Close 3rd tab
   */ 
  $options_panel->CloseTab();
