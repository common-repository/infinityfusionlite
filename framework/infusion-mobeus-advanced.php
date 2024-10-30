<?php

function infusion_mobeus_downloadable_debug_info(){
  $output = '';
  $infusion_mobeus_values = get_option('infusion_mobeus_framework_values');
  $infusion_mobeus_options = get_option('infusion_mobeus_framework_options');
  $i = 0;
  foreach($infusion_mobeus_values as $key => $val){
    $i++;
    $output .= $i.". ".$key."[".stripslashes($val)."]"."\n";
  }
  foreach($infusion_mobeus_options as $key => $val){
    $i++;
    $output .= $i.". ".$key."[".$val."]"."\n";
  }

  $output .= $i++.'. WordPress Version['.get_bloginfo('version').']'."\n";
  $output .= $i++.'. Theme Name & Version[' . $theme_name . ' '.INFUSION_MOBEUS_VERSION.']'."\n";
  $output .= $i++.'. PHP Version['.phpversion().']'."\n";
  $output .= $i++.'. Server Software['.$_SERVER['SERVER_SOFTWARE'].']'."\n";
  $output .= $i++.'. UPLOAD_MAX_FILESIZE['.ini_get( 'upload_max_filesize' ).']'."\n";
  $output .= $i++.'. DISPLAY_ERRORS['.ini_get( 'display_errors' ).']'."\n";
  return $output;
}

function infusion_mobeus_advanced(){
    $infusion_mobeus_options = get_option('infusion_mobeus_framework_options');
    ?>

<div id="infusion_mobeus-admin-wrap" class="advanced-wrap wrap">
    <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post" id="infusion_mobeus-form-advanced">
      <div class="infusion_mobeus-header" id="wrap">
        <h1><?php echo INFUSION_MOBEUS_PLUGIN_NAME; ?> <span><?php echo 'v'.INFUSION_MOBEUS_VERSION; ?></span></h1>
        <p>
          by <a href="http://codecanyon.net/user/InfinityCode" target="_blank">InfinityCode</a>
          <?php if(INFUSION_MOBEUS_PLUGIN_TYPE === 'premium'): ?>
          &middot; <a href="//docs.pristinethemes.co.uk/docs/infinityfusion/" target="_blank" title="<?php echo INFUSION_MOBEUS_PLUGIN_NAME; ?>'s documentation">Documentation</a>
          &middot; <a href="//codecanyon.net/user/InfinityCode" target="_blank" title="InfinityCode Support">Support</a>
          <?php endif; ?>
        </p>
        <div id="infusion_mobeus-logo"><a href="//infinitycode.co.uk?ref=mobeusframework" title="Mobeus Framework"></a></div>
      </div>

      <div class="infusion_mobeus-content cf infusion_mobeus-tab-advanced">
        <h2>Advanced Settings</h2>
         <div id="page-notify" style=""><p style="padding: 12px !important;
text-align: center;
font-size: 17px;background-color:rgba(41, 255, 0, 0.59);border-radius:1px;color:rgb(87, 87, 87);">You are using the Free version of InfinityFusion. <a href="http://codecanyon.net/item/infinityfusion-responsive-wordpress-admin-skins/5100919?ref=InfinityCode">For more Features, Click Here to Upgrade</a></p></div>
        <p class="page-description">Here you can import/export you plugin settings and check debug information.</p>
        <div class="page">
            <div class="row clearfix">
                <h3>Import Settings</h3>
                <div class="desc">
                  Import your plugin settings you saved before.
                </div>
                <div class="input">
                    <textarea name="import_code_data" id="import_code_data"></textarea>
                    <button type="submit" name="import_settings" id="export_code" class="button ">Import Settings</button>
                    <?php
                    if(isset($_POST['import_settings'])){
                        if($_POST['import_code_data'] != ''){
                            $code = $_POST['import_code_data'];
                            $data = json_decode(base64_decode($code));
                            foreach($data as $key => $value){
                                infusion_mobeus_update_option($key, $value);
                            }
                            echo '<p>Excellent! Settings Restored.</p>';
                        }else{
                            echo "<p>Nothing? Seriously?</p>";
                        }
                    }
                   ?>
                </div>
            </div>

            <div class="row clearfix">
                <h3>Export Settings</h3>
                <div class="desc">
                  <?php $code = base64_encode(json_encode(get_option('infusion_mobeus_framework_values'))); ?>
                  <p>Use this code (contains current plugin settings) into the import field to restore your settings if lost or using on another installation.</p>
                  <p><a id="download_export_data" href="#" data-code="<?php //echo $code; ?>">Click here</a> to generate text file with plugin settings.</p>
                  <div id="theme_settings_data" hidden><?php echo $code; ?></div>
                  <output id="download_export_data_output"></output>
                </div>
                <div class="input">
                    <textarea id="import_code" readonly><?php echo $code; ?></textarea>
                </div>
            </div>

            <div class="row clearfix">
              <h3>Debug Information</h3>
              <div class="desc">
                <p>Download site debug information. (Useful when contacting to support team)</p>
                <p><a id="download_debug_info" href="#" data-code="<?php //echo infusion_mobeus_downloadable_debug_info(); ?>">Click here</a> to generate text file with plugin debug information.</p>
                <div id="debug_info_data" hidden><?php echo infusion_mobeus_downloadable_debug_info(); ?></div>
                <output id="download_debug_info_output"></output>
              </div>
              <div class="input theme-debug-info">
                <p><span>Plugin Name:</span> <?php echo INFUSION_MOBEUS_PLUGIN_NAME; ?></p>
                <p><span>Plugin Version:</span> <?php echo INFUSION_MOBEUS_VERSION; ?></p>
                <p><span>Mobeus Framework:</span> <?php echo INFUSION_MOBEUS_FRAMEWORK_VERSION; ?></p>
                <p><span>PHP Version:</span> <?php echo phpversion(); ?></p>
                <p><span>Server Software:</span> <?php echo $_SERVER['SERVER_SOFTWARE']; ?></p>
                <p><span>Maximum Upload:</span> <?php echo ini_get( 'upload_max_filesize' ); ?>b</p>
                <p><span>Errors:</span> <?php echo ini_get( 'display_errors' ); ?></p>
              </div>
            </div>
<!--
            <div class="row clearfix">
              <h3>Report</h3>
              <div class="desc">
                <p>Report a bug or send feedback</p>
              </div>
              <div class="input theme-bug-report">
                <p>Use this <a href="<?php echo INFUSION_MOBEUS_FEEDBACK_URL; ?>">form</a> to send your feedback, suggestions, bug reports etc.</p>
              </div>
            </div>
-->
        </div>
      </div>
  </form>
</div>
<?php if(_DEBUG): ?>
<div id="infusion_mobeus-debug-info">
  <p><b>Debug Information</b></p>
    <textarea readonly id="debug-info"><?php
      echo '//infusion_mobeus_framework_values'."\n";
      print_r(get_option('infusion_mobeus_framework_values'));
      echo "\n\n".'//infusion_mobeus_framework_options'."\n";
      print_r($infusion_mobeus_options);
      echo "\n\n";
      echo '//misc'."\n";
      echo "WordPress Version: ".get_bloginfo( 'version' )."\n";
      echo "PHP Version: ".phpversion()."\n";
      echo "Server Software: ".$_SERVER['SERVER_SOFTWARE']."\n";
      echo "Maximum Upload Filesize: ".ini_get( 'upload_max_filesize' )."\n";
      echo "Errors: ".ini_get( 'display_errors' )."\n";
      ?></textarea>
</div>
<?php endif; ?>

  <?php
}