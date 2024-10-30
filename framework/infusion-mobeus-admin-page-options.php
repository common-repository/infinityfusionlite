<?php
// THEME OPTIONS SETUP
function infusion_mobeus_options_page(){
  $infusion_mobeus_options = get_option('infusion_mobeus_framework_options');
  ksort($infusion_mobeus_options['infusion_mobeus_framework']);
  ?>
  <?php if(isset($_GET['activated'])){ ?>
  <div class="updated admin-message" id="message">
    <p><?php echo sprintf(__('%s activated, please save settings before leaving this page.', 'infusion_mobeus'), INFUSION_MOBEUS_THEME_NAME); ?></p>
  </div>
  <?php } ?>
  <div id="settings-saved">
  </div>
  <div id="infusion_mobeus-admin-wrap" class="wrap">
    <form action="<?php echo site_url() .'/wp-admin/admin-ajax.php'; ?>" method="post" id="infusion_mobeus-form">
      <div class="infusion_mobeus-header">
        <h1>InfinityFusionLite <span> <?php echo 'v'. INFUSION_MOBEUS_VERSION ; ?></span></h1>
        <p>
          by <a href="http://codecanyon.net/user/InfinityCode/" target="_blank">InfinityCode</a>
          <?php if(INFUSION_MOBEUS_PLUGIN_TYPE === 'premium'): ?>
          &middot; <a href="//docs.pristinethemes.co.uk/docs/infinityfusion/" target="_blank" title="<?php echo INFUSION_MOBEUS_THEME_NAME; ?>'s Documentation">Documentation</a>
          &middot; <a href="//codecanyon.net/user/InfinityCode" target="_blank" title="InfinityFusion Support">Support</a>
          <?php endif; ?>
        </p>
        <div id="infusion_mobeus-logo"><a href="//codecanyon.net/user/InfinityCode" title="InfinityFusion" target="_blank"></a></div>
      </div>
      <div class="infusion_mobeus-content cf">
        <div class="infusion_mobeus-sidebar">
          <ul>
            <?php foreach($infusion_mobeus_options['infusion_mobeus_framework'] as $page): ?>
            <li data-name="<?php echo infusion_mobeus_to_slug(key($page)); ?>"><a href="#<?php echo infusion_mobeus_to_slug( key($page) ); ?>"><?php echo key($page); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="infusion_mobeus-main-content">
          <?php foreach( $infusion_mobeus_options['infusion_mobeus_framework'] as $page ):?>
          <div id="page-<?php echo infusion_mobeus_to_slug(key($page)); ?>" class="page">
            <h2><?php echo key($page); ?></h2>
            <div id="page-notify" style=""><p style="padding: 12px !important;
text-align: center;
font-size: 17px;background-color:rgba(41, 255, 0, 0.59);border-radius:1px;color:rgb(87, 87, 87);">You are using the Free version of InfinityFusion. <a href="http://codecanyon.net/item/infinityfusion-responsive-wordpress-admin-skins/5100919?ref=InfinityCode">For more Features, Click Here to Upgrade</a></p></div>
            <p class="page-description">
              <?php if(isset($page[key($page)]['description']) && $page[key($page)]['description'] != '' ) echo $page[key($page)]['description']; ?>
            </p>

            <?php foreach($page[key($page)] as $item) : ?>
              <?php if(key((array)$item) == 'description') continue; ?>
              <div data-type="<?php echo $item['type']; ?>" class="row <?php echo infusion_mobeus_to_slug(@$item['title']); ?> clearfix">
                <h3><?php echo $item['title']; ?></h3>
                <?php if(isset($item['desc']) && $item['desc'] != '') : ?>
                <div class="desc">
                  <?php echo $item['desc']; ?>
                </div>
                <?php endif; ?>
                <?php infusion_mobeus_create_field($item); ?>
              </div>
            <?php endforeach; ?>

          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="footer clearfix">
        <input type="hidden" name="action" value="infusion_mobeus_framework_save" />
        <input type="hidden" name="infusion_mobeus_noncename" id="infusion_mobeus_noncename" value="<?php echo wp_create_nonce('infusion_mobeus_framework_options'); ?>" />
        <input type="button" value="<?php _e( 'Reset All', 'infusion_mobeus' ); ?>" class="m-button" id="reset-button" />
        <input type="submit" name="save_changes" value="<?php _e( 'Save Changes', 'infusion_mobeus' ); ?>" class="m-button blue" id="save-button" />
      </div>

    </form>
  </div>
  <?php
}

// Alright let's save the data
function infusion_mobeus_framework_save(){
  $response['error'] = false;
  $response['message'] = '';
  $response['type'] = '';

  // Got to check if it's coming from the right screen
  if(!isset($_POST['infusion_mobeus_noncename']) && !wp_verify_nonce($_POST['infusion_mobeus_noncename'], plugin_basename('infusion_mobeus_framework_options'))){
    $response['error'] = true;
    $response['message'] = __('You do not have sufficient permissions to save these options.', 'infusion_mobeus' );
    echo json_encode($response);
    die;
  }

  $infusion_mobeus_values = get_option('infusion_mobeus_framework_values');
  foreach($_POST['settings'] as $key => $val){
    $infusion_mobeus_values[$key] = $val;
  }

  $infusion_mobeus_values = apply_filters('infusion_mobeus_framework_save', $infusion_mobeus_values);
  update_option('infusion_mobeus_framework_values', $infusion_mobeus_values);

  $response['message'] = __('Settings Successfully Saved!', 'infusion_mobeus');
  echo json_encode($response);
  die;
}
add_action('wp_ajax_infusion_mobeus_framework_save', 'infusion_mobeus_framework_save');

// That's how I reset the form data
function infusion_mobeus_framework_reset(){
  $response['error'] = false;
  $response['message'] = '';

  if(!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], plugin_basename('infusion_mobeus_framework_options'))){
      $response['error'] = true;
      $response['message'] = __('You do not have sufficient permissions to reset these options.', 'infusion_mobeus' );
      echo json_encode($response);
      die;
  }

  update_option('infusion_mobeus_framework_values', array());
  echo json_encode($response);
  die;
}
add_action('wp_ajax_infusion_mobeus_framework_reset', 'infusion_mobeus_framework_reset');


// AJAX UPLOAD SETUP
function infusion_mobeus_ajax_upload(){
  $response['error']=  false;
  $response['message']=  '';

  $wp_uploads = wp_upload_dir();
  $upload_file = $wp_uploads['path'].'/'.basename($_FILES['userfile']['name']);

  if(move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_file)){
    $infusion_mobeus_values = get_option('infusion_mobeus_framework_values');
    $infusion_mobeus_values[$_POST['data']] = $wp_uploads['url'].'/'.basename($_FILES['userfile']['name']);
    update_option('infusion_mobeus_framework_values', $infusion_mobeus_values);
    $response['message'] = 'success';
  }else{
    $response['error'] = 'true';
    $response['message'] = 'error';
  }

  echo json_encode($response);
  die;
}
add_action('wp_ajax_infusion_mobeus_ajax_upload', 'infusion_mobeus_ajax_upload');


function infusion_mobeus_ajax_remove(){
  $response['error'] = false;
  $response['message'] = '';

  $data = $_POST['data'];

  $infusion_mobeus_values = get_option('infusion_mobeus_framework_values');
  unset($infusion_mobeus_values[$_POST['data']]);
  update_option('infusion_mobeus_framework_values', $infusion_mobeus_values);
  $response['message'] =  'success';

  echo json_encode($response);
  die;
}
add_action('wp_ajax_infusion_mobeus_ajax_remove', 'infusion_mobeus_ajax_remove');


function infusion_mobeus_support() { ?>
    <script type="text/javascript">
        //<![CDATA[
            window.location.replace("http://support.codeinfusion_mobeus.com");
        //]]>
    </script>
<?php }