<?php if( infusion_mobeus_get_option('enable_img_bg') == 'on' ) { 
			 if (infusion_mobeus_get_option('custom_img_bg_file') !== '') {
			echo('
			
			background-image:url('. infusion_mobeus_get_option('custom_img_bg_file') . ');
			
			');
			 if (infusion_mobeus_get_option('img_bg_custom_style') == 'tile') {echo('background-repeat:repeat;');}
			if (infusion_mobeus_get_option('img_bg_custom_style') == 'cover') {echo('background-size:100% 100%;background-attachment:fixed;');}
			 }
			 
			 //echo('
			//background-image:url('. infusion_mobeus_get_option('img_bg_preset') . ');
			//');
			 
			if (infusion_mobeus_get_option('custom_img_bg_file') == '') {
					if (infusion_mobeus_get_option('img_bg_preset') == ''){echo('background-image:url(../../images/galaxy1.jpg);background-size:100% 100%;background-attachment:fixed;');};
					if (infusion_mobeus_get_option('img_bg_preset') == '../../images/09.jpg'){echo('background-image:url('.infusion_mobeus_get_option('img_bg_preset').');background-repeat:repeat;');};
					if (infusion_mobeus_get_option('img_bg_preset') == '../../images/08.jpg'){echo('background-image:url('.infusion_mobeus_get_option('img_bg_preset').');background-repeat:repeat;');};
					if (infusion_mobeus_get_option('img_bg_preset') == '../../images/bokeh.jpg'){echo('background-image:url('.infusion_mobeus_get_option('img_bg_preset').');background-size:100% 100%;background-attachment:fixed;');};
					if (infusion_mobeus_get_option('img_bg_preset') == '../../images/bokeh2.jpg'){echo('background-image:url('.infusion_mobeus_get_option('img_bg_preset').');background-size:100% 100%;background-attachment:fixed;');};
					if (infusion_mobeus_get_option('img_bg_preset') == '../../images/galaxy1.jpg'){echo('background-image:url('.infusion_mobeus_get_option('img_bg_preset').');background-size:cover;background-attachment:fixed;');};
					if (infusion_mobeus_get_option('img_bg_preset') == '../../images/dark_swirls.jpg'){echo('background-image:url('.infusion_mobeus_get_option('img_bg_preset').');background-size:contain;background-attachment:fixed;');};
					if (infusion_mobeus_get_option('img_bg_preset') == '../../images/leaf1.jpg'){echo('background-image:url('.infusion_mobeus_get_option('img_bg_preset').');background-size:100%;background-attachment:fixed;');};
					if (infusion_mobeus_get_option('img_bg_preset') == '../../images/summer-sky.jpg'){echo('background-image:url('.infusion_mobeus_get_option('img_bg_preset').');background-size:100%;background-attachment:fixed;');};
					if (infusion_mobeus_get_option('img_bg_preset') == '../../images/winter-tree.jpg'){echo('background-image:url('.infusion_mobeus_get_option('img_bg_preset').');background-size:100%;background-attachment:fixed;');};
					if (infusion_mobeus_get_option('img_bg_preset') == '../../images/1724.png'){echo('background-image:url('.infusion_mobeus_get_option('img_bg_preset').');background-repeat:repeat;');};
			}			
			}?>