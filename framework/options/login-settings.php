<?php
add_action('admin_init', 'infusion_mobeus_login_settings');
function infusion_mobeus_login_settings(){
    $login_settings['description'] = 'Customise the Login UI of your Blog. Need Help? <a href="http://docs.pristinethemes.co.uk/docs/infinityfusion/">Refer to the Documentation.</a>';

    $login_settings[] = array(
        'title' => __('Don\'t Allow InfinityFusion to Edit the Login Screen', 'infusion_mobeus'),
        'desc'  => __('Check this box to disable InfinityFusion\'s Login override.', 'infusion_mobeus'),
        'type'  => 'checkbox',
        'id'    => 'disable_login_infusion',
        'val'   => 'off'
    );
	
	$login_settings[] = array(
    'title' => __('Login Background Colour', 'infusion_mobeus'),
    'desc'  => __('Choose the main background colour for your login form.', 'infusion_mobeus'),
    'type'  => 'color',
    'id'    => 'login_bg_colour',
    'val'   => '#eee'
  );

  
  $login_settings[] = array(
        'title' => __('Upload a Logo for the Login Form', 'infusion_mobeus'),
        'desc'  => __('Upload a custom logo for your login form.</br></br><b>NOTE: A logo of size 300px x 100px is recommended.', 'infusion_mobeus'),
        'type'  => 'file',
        'id'    => 'login_logo',
        'val'   => __('Upload Logo', 'infusion_mobeus')
    ); 
	 
  $login_settings[] = array(
     'title' => __('Login Background Picture', 'infusion_mobeus'),
        'desc'  => __('Upload a custom background for your login screen.</br></br><b>NOTE: An Image File which is larger than 1600px x 900px is recommended, and with a filesize less than 500KB, to optimise page speed.</b>', 'infusion_mobeus'),
        'type'  => 'p-message',
        'id'    => 'login_bg_pic',
        'val'   => __('Upload Background', 'infusion_mobeus')
  );
  
  $login_settings[] = array(
        'title' => __('Login Background Picture Style', 'infusion_mobeus'),
        'desc'  => __('Choose how you want your custom login background to be shown.', 'mobeus'),
        'type'  => 'p-message',
        'id'    => 'login_bg_pic_style',
        'val'   => 'cover',
        'options' => array(
            'cover' => __('Stretch to Fill Screen', 'infusion_mobeus'),
            'tile' => __('Tile at Native Resolution', 'infusion_mobeus'),
        )
    );
	
    infusion_mobeus_add_framework_page( 'Login', $login_settings, 8 );
}

