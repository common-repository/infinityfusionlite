<?php
add_action('admin_init', 'infusion_mobeus_general_settings');
function infusion_mobeus_general_settings(){
    $general_settings['description'] = 'Here you can configure the basic aspects of InfinityFusionLite. Need Help? <a href="http://docs.pristinethemes.co.uk/docs/infinityfusion/">Refer to the Documentation.</a>';

    $general_settings[] = array(
        'title' => __('Disable Admin Theme', 'infusion_mobeus'),
        'desc'  => __('Check this box to disable InfinityFusion\'s Admin Theme override. The Admin Dashboard should appear as it does in default Wordpress.', 'infusion_mobeus'),
        'type'  => 'checkbox',
        'id'    => 'disable_infusion',
        'val'   => 'off'
    );
	
	$general_settings[] = array(
        'title' => __('Hide the Admin Bar?', 'infusion_mobeus'),
        'desc'  => __('Check this box to hide the Wordpress Admin Bar (top).</br><b>NOTE: This only applies to the front end of the site.</b>', 'infusion_mobeus'),
        'type'  => 'checkbox',
        'id'    => 'general_disable_admin_bar',
        'val'   => 'off'
    );
	
	 $general_settings[] = array(
        'title' => __('Enable an Image Background', 'infusion_mobeus'),
        'desc'  => __('Check this box to allow InfinityFusion to display a background wallpaper on your Admin Dashboard.', 'infusion_mobeus'),
        'type'  => 'checkbox',
        'id'    => 'enable_img_bg',
        'val'   => 'on'
    );
	
	$general_settings[] = array(
        'title' => __('Background Image Presets', 'infusion_mobeus'),
        'desc'  => __('Select from one of InfinityFusion\'s Image Background Presets. </br></br><b>These will only show if the \'Enable an Image Background\' Checkbox is checked.</b></br></br>If a Custom Background Image is defined, that will override this option. To use the presets, make sure that the \'Custom Image Background\' Media Selector is cleared.', 'mobeus'),
        'type'  => 'select',
        'id'    => 'img_bg_preset',
        'val'   => '../../images/galaxy1.jpg',
        'options' => array(
            '../../images/09.jpg' => __('Paper [Dark]   (17KB)', 'infusion_mobeus'),
			'../../images/08.jpg' => __('Paper [Light]   (9KB)', 'infusion_mobeus'),
			'../../images/galaxy1.jpg' => __('Galaxy 1  (221KB)', 'infusion_mobeus'),
			//'../../images/bokeh.jpg' => __('Bokeh 1  (36KB)', 'infusion_mobeus'),
			//'../../images/bokeh2.jpg' => __('Bokeh 2  (38KB)', 'infusion_mobeus'),
			'../../images/dark_swirls.jpg' => __('Dark Swirls  (133KB)', 'infusion_mobeus'),
			'../../images/leaf1.jpg' => __('Leaf 1  (217KB)', 'infusion_mobeus'),
			//'../../images/summer-sky.jpg' => __('Summer Sky  (75KB)', 'infusion_mobeus'),
			//'../../images/winter-tree.jpg' => __('Snowy Tree  (173KB)', 'infusion_mobeus'),
			'../../images/1724.png' => __('Light Stripes  (0.6KB)', 'infusion_mobeus'),
        )
    );
	
	$general_settings[] = array(
        'title' => __('Custom Background', 'infusion_mobeus'),
        'desc'  => __('Upload a custom background for your Wordpress Admin Panel.</br></br><b>This will only show if the \'Enable an Image Background\' Checkbox is checked.</b></br></br>This will override any preset which has been defined.</br></br><b>NOTE: An Image File which is larger than 1600px x 900px is recommended, and with a filesize less than 500KB, to optimise page speed.</b>', 'infusion_mobeus'),
        'type'  => 'p-message',
        'id'    => 'custom_img_bg_file',
        'val'   => __('Upload Image', 'infusion_mobeus')
    );
	
	$general_settings[] = array(
        'title' => __('Custom Background Image Display Settings', 'infusion_mobeus'),
        'desc'  => __('Use this to choose how you want your custom background to be displayed.</br></br><b>NOTE: This will only work with custom pictures, and will not affect the presets.</b>', 'mobeus'),
        'type'  => 'p-message',
        'id'    => 'img_bg_custom_style',
        'val'   => 'cover',
        'options' => array(
            'cover' => __('Stretch to Fill Screen', 'infusion_mobeus'),
            'tile' => __('Tile at Native Resolution', 'infusion_mobeus'),
        )
    );


    infusion_mobeus_add_framework_page( 'General', $general_settings, 5 );
}


if(infusion_mobeus_get_option('general_disable_admin_bar') === 'on'){
    show_admin_bar(false);
}

