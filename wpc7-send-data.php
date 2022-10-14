<?php
/**
 * Plugin Name:     WpC7 Send Data
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     wpc7-send-data
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Wpc7_Send_Data_Plugin
 */

// Your code starts here.
function my_action_wpcf7_before_send_mail( $contact_form, $abort ) { 
    // to get form id
   $form_id = $contact_form->id();
   // to get submission data $posted_data is asociative array
  $submission = WPCF7_Submission::get_instance(); 
  $posted_data = $submission->get_posted_data();
  echo '<pre>';
  print_r($posted_data);
  echo '</pre>';
 // It will abort mail function if we assing $abort = true;
 $abort=true;
}
       
// add the action 
add_action( 'wpcf7_before_send_mail', 'my_action_wpcf7_before_send_mail', 10, 2 ); 