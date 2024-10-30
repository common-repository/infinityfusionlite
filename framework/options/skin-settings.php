<?php
add_action('admin_init', 'infusion_mobeus_portfolio_settings');
function infusion_mobeus_portfolio_settings(){
    $portfolio_settings['description'] = 'Choose a Skin for your Dashboard. Need Help? <a href="http://docs.pristinethemes.co.uk/docs/infinityfusion/">Refer to the Documentation.</a>';

    $portfolio_settings[] = array(
        'title' => __('Skin', 'infusion_mobeus'),
        'desc'  => __('Select a pre-defined skin for your InfinityFusion Admin Theme.', 'infusion_mobeus'),
        'type'  => 'select',
        'id'    => 'infusion_skin',
        'val'   => 'Marble',
        'options' => array(
            'marble' => __('Marble (Default)', 'infusion_mobeus'),
            'slate' => __('Slate', 'infusion_mobeus'),
			'tangerine' => __('Tangerine', 'infusion_mobeus'),
        )
    );
	
	 $portfolio_settings[] = array(
        'title' => __('Use Custom Options', 'infusion_mobeus'),
        'desc'  => __('Check this box to use the Custom User Options defined in the Custom Tab.', 'infusion_mobeus'),
        'type'  => 'p-message',
        'id'    => 'custom_infusion',
        'val'   => 'off'
    );
	
	
    infusion_mobeus_add_framework_page( 'Skin', $portfolio_settings, 6);
}
