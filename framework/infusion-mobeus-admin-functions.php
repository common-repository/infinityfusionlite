<?php
function infusion_mobeus_to_slug($str){
  $str = strtolower(trim($str));
  $str = preg_replace('/[^a-z0-9-]/', '-', $str);
  $str = preg_replace('/-+/', "-", $str);
  return $str;
}

function infusion_mobeus_create_field($item){
  $infusion_mobeus_values = get_option('infusion_mobeus_framework_values');
  echo '<div class="input '.infusion_mobeus_to_slug($item['type']).'">';

  $class = '';
  if(array_key_exists('class', $item)) $class = ' class="'.$item['class'].'" ';

  $attr = '';
  if(array_key_exists('attr', $item)) $attr = $item['attr'];

  $prefix = 'settings';
  if(array_key_exists('ignore', $item) && $item['ignore'] == true) $prefix = 'ignore';

  // TEXT INPUT
  if($item['type'] == 'text'){
    $val = '';
    if(array_key_exists('val', $item)) $val = ' value="'.stripslashes($item['val']).'"';
    if(array_key_exists($item['id'], $infusion_mobeus_values)) $val = ' value="'.stripslashes($infusion_mobeus_values[$item['id']]).'"';
    echo '<input type="text" id="'.$item['id'].'" name="'.$prefix.'['.$item['id'].']" '.$val.$class.$attr.' />';
  }

  if($item['type'] == 'number' || $item['type'] == 'datetime' || $item['type'] == 'datetime'){
    $val = '';
    if(array_key_exists('val', $item)) $val = ' value="'.$item['val'].'"';
    if(array_key_exists($item['id'], $infusion_mobeus_values)) $val = ' value="'.$infusion_mobeus_values[$item['id']].'"';
    echo '<input type="'.$item['type'].'" id="'.$item['id'].'" name="'.$prefix.'['.$item['id'].']" '.$val.$class.$attr.' />';
  }

  // TEXTAREA
  if($item['type'] == 'textarea'){
    $val = '';
    if(array_key_exists('val', $item)) $val = $item['val'];
    if(array_key_exists($item['id'], $infusion_mobeus_values)) $val = $infusion_mobeus_values[$item['id']];
    echo '<textarea id="'. $item['id'] .'" name="'. $prefix .'['. $item['id'] .']"'. $class . $attr .' >'. stripslashes($val) .'</textarea>';
  }

  // WYSIWYG
  if($item['type'] == 'wysiwyg'){
    $val = '';
    $class .= ' class="wysiwyg_editor"';
    if(array_key_exists('val', $item)) $val = $item['val'];
    if(array_key_exists($item['id'], $infusion_mobeus_values)) $val = $infusion_mobeus_values[$item['id']];
    echo '<textarea id="'. $item['id'] .'" name="'. $prefix .'['. $item['id'] .']"'. $class . $attr .' >'. stripslashes($val) .'</textarea>';
  }

  // SELECT
  if($item['type'] == 'select' && array_key_exists('options', $item)){
    echo '<select id="'.$item['id'].'" name="'.$prefix.'['.$item['id'].']" '.$class.$attr.'>';
    foreach($item['options'] as $key=>$value){
      $val = '';
      if(array_key_exists($item['id'], $infusion_mobeus_values)){
        if($infusion_mobeus_values[$item['id']] == $key) $val = ' selected="selected"';
      }else{
        if(array_key_exists('val', $item) && $item['val'] == $key) $val = ' selected="selected"';
      }
      echo '<option value="'.$key.'"'.$val.'>'.$value.'</option>';
    }
    echo '</select>';
  }

  // PAGES DROPDOWN
  if($item['type'] == 'pages'){
    $infusion_mobeus_pages_obj = get_pages();
    echo '<select id="'. $item['id'] .'" name="'. $prefix .'['. $item['id'] .']"'. $class .$attr.'>';
    echo '<option value="">Select Page</option>';
    foreach($infusion_mobeus_pages_obj as $infusion_mobeus_page){
        $val = '';
        if(array_key_exists($item['id'], $infusion_mobeus_values)){
            if($infusion_mobeus_values[$item['id']] == $infusion_mobeus_page->ID) $val = ' selected="selected"';
        } else {
            if(array_key_exists('val', $item) && $item['val'] == $infusion_mobeus_page->ID) $val = ' selected="selected"';
        }
        echo '<option value="'. $infusion_mobeus_page->ID .'"'. $val .'>'. $infusion_mobeus_page->post_title .'</option>';
    }
    echo '</select>';
  }

  // CATEGORY DROPDOWN
  if($item['type'] == 'category'){
    $infusion_mobeus_categories_obj = get_categories('hide_empty=0');

    echo '<select id="'. $item['id'] .'" name="'. $prefix .'['. $item['id'] .']"'. $class .$attr.'>';
    foreach($infusion_mobeus_categories_obj as $infusion_mobeus_category){
        $val = '';
        if(array_key_exists($item['id'], $infusion_mobeus_values)){
            if($infusion_mobeus_values[$item['id']] == $infusion_mobeus_category->cat_ID) $val = ' selected="selected"';
        } else {
            if(array_key_exists('val', $item) && $item['val'] == $infusion_mobeus_category->cat_ID) $val = ' selected="selected"';
        }
        echo '<option value="'. $infusion_mobeus_category->cat_ID .'"'. $val .'>'. $infusion_mobeus_category->cat_name .'</option>';
    }
    echo '</select>';
  }

  // RADIO BUTTON
  if($item['type'] == 'radio' && array_key_exists('options', $item)){
    $i = 0;
    foreach($item['options'] as $key=>$value){
      $val = '';
      if(array_key_exists($item['id'], $infusion_mobeus_values)){
          if($infusion_mobeus_values[$item['id']] == $key) $val = ' checked="checked"';
      }else{
          if(array_key_exists('val', $item) && $item['val'] == $key) $val = ' checked="checked"';
      }
      echo '<label for="'. $item['id'] .'_'. $i .'"><input type="radio" id="'. $item['id'] .'_'. $i .'" name="'. $prefix .'['. $item['id'] .']" value="'. $key .'"'. $val . $class . $attr .'> '. $value .'</label><br />';
      $i++;
    }
  }

  // CHECKBOX
  if($item['type'] == 'checkbox'){
    $val= '';
    if(array_key_exists('val', $item) && $item['val'] == 'on') $val = ' checked="yes"';
    if(array_key_exists($item['id'], $infusion_mobeus_values) && $infusion_mobeus_values[$item['id']] == 'on') $val = ' checked="yes"';
    if(array_key_exists($item['id'], $infusion_mobeus_values) && $infusion_mobeus_values[$item['id']] != 'on') $val = '';
    echo '<input type="hidden" name="'. $prefix .'['. $item['id'] .']" value="off" />
    <input type="checkbox" id="'. $item['id'] .'" name="'. $prefix .'['. $item['id'] .']" value="on"'. $class . $val . $attr .' /> ';
    if(array_key_exists('text', $item)) echo $item['text'];
  }
  
   // PREMIUM MESSAGE
  if($item['type'] == 'p-message'){
    $val= '';
    echo '<div style="text-align:center;line-height:5px;font-family:Open Sans;"><h4><b>This Feature is Disabled in InfinityFusionLite</b></h4></br><h5><a href="http://codecanyon.net/item/infinityfusion-responsive-wordpress-admin-skins/5100919?ref=InfinityCode">Click here to Upgrade</a></h5></div>';
  }

  // MULTI CHECKBOXES
  if($item['type'] == 'checkboxes' && array_key_exists('options', $item)){
    foreach($item['options'] as $key=>$value){
      $val = '';
      $id = $item['id'].'_'.infusion_mobeus_to_slug($key);
      if($value == 'on') $val = ' checked="yes"';
      if(array_key_exists($id, $infusion_mobeus_values) && $infusion_mobeus_values[$id] == 'on') $val = ' checked="yes"';
      if(array_key_exists($id, $infusion_mobeus_values) && $infusion_mobeus_values[$id] != 'on') $val = '';
      echo '<input type="hidden" name="'. $prefix .'['. $id .']" value="off" />
      <input type="checkbox" id="'. $id .'" name="'. $prefix .'['. $id .']" value="on"'. $class . $val . $attr .' /> ';
      echo '<label for="'. $id .'">'. $key .'</label><br />';
    }
  }


  // FILE
  if($item['type'] == 'file'){
    $val = 'Upload';
    if(array_key_exists('val', $item)) $val = $item['val'];
    $wp_uploads = wp_upload_dir();
    ?>
    <div id="uploaded_<?php echo $item['id']; ?>" class="ajax-upload">
      <?php
      if(array_key_exists($item['id'], $infusion_mobeus_values) && $item['id'] != ''){
        $ext = substr($infusion_mobeus_values[$item['id']], strrpos($infusion_mobeus_values[$item['id']], '.') + 1);
        if($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg' || $ext == 'gif' || $ext == 'webp'){
          echo '<img src="'.$infusion_mobeus_values[$item['id']].'" alt"" />';
        }else{
          echo $infusion_mobeus_values[$item['id']];
        }
      }
      ?>
    </div>
    <?php
    $oup = '';
    if(isset($infusion_mobeus_values[$item['id']]) && $infusion_mobeus_values[$item['id']] != ''){
      $oup = $infusion_mobeus_values[$item['id']];
    }
    ?>
    <input type="text" id="text_<?php echo $item['id']; ?>" name="settings[<?php echo $item['id']; ?>]" hidden value="<?php echo @$oup; ?>" >
    <a href="#" id="file_upload_<?php echo $item['id']; ?>" class="mu-button green" <?php echo @$attr; ?>><?php echo $val; ?></a>
    <a href="#" id="file_remove_<?php echo $item['id']; ?>" class="mu-button red" <?php if(@$infusion_mobeus_values[$item['id']] == ''){ echo ' style="display:none;"'; } ?>><?php _e('Remove', 'infusion_mobeus'); ?></a>
    <script type="text/javascript">
    jQuery(document).ready(function($){
      var hasAdded = false;
      $("#save-button").click(function(){
        hasAdded = false;
        $("span.changed").remove();
      });
      $("#file_upload_<?php echo $item['id'] ?>").click(function(e){
        e.preventDefault();
        var button = $(this);
        var id = "text_<?php echo $item['id'] ?>";
        wp.media.editor.send.attachment = function(props, attachment){
          $("#"+id).val(attachment.url);
          var file = attachment.url;
          $("#text_<?php echo $item['id']; ?>").val(file);
          $('#uploaded_<?php echo $item['id']; ?>').html('');
          var ext = file.substr(file.lastIndexOf(".")+1, file.length);
          if(ext && /^(jpg|png|jpeg|gif)$/.test(ext)){
            $('#uploaded_<?php echo $item['id']; ?>').html('<img src="'+file+'" alt="" />');
            $('#file_remove_<?php echo $item['id']; ?>').show();
          }else{
            $('#uploaded_<?php echo $item['id']; ?>').html(file);
          }
        }
        if(hasAdded === false){
          $("<span class='changed'><span></span>You have unsaved changes!</span>").insertBefore("#infusion_mobeus-admin-wrap");
        }
        wp.media.editor.open(button);
      });

      var remove = $('#file_remove_<?php echo $item['id']; ?>');
      remove.bind('click', function(){
        remove.text('Removing...');
        $("#text_<?php echo $item['id']; ?>").val('');
        $('#uploaded_<?php echo $item['id']; ?>').html('');
        remove.text('Remove');
        remove.hide();
        return false;
      });

    });
    </script>

    <?php
  }


  // FILES
  if($item['type'] == 'files'){
    $val = 'Upload';
    if(array_key_exists('val', $item)) $val = $item['val'];

    ?>
    <div id="uploaded_<?php echo $item['id']; ?>" class="ajax-upload">
      <?php

      if(array_key_exists($item['id'], $infusion_mobeus_values) && $item['id'] != ''){
        $values = $infusion_mobeus_values[$item['id']];
        $values = explode(",", $values);
        foreach($values as $dval){
          $ext = substr($dval, strrpos($dval, '.') + 1);
          if($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg' || $ext == 'gif' || $ext == 'webp'){
            echo '<img src="'.$dval.'" alt"" />';
          }else{
            echo $dval;
          }
        }
      }
      ?>
    </div>
    <?php
    $oup = '';
    if(isset($infusion_mobeus_values[$item['id']]) && $infusion_mobeus_values[$item['id']] != ''){
      $oup = $infusion_mobeus_values[$item['id']];
    }
    ?>
    <input type="text" id="text_<?php echo $item['id']; ?>" name="settings[<?php echo $item['id']; ?>]" hidden value="<?php echo @$oup; ?>" >
    <a href="#" id="file_upload_<?php echo $item['id']; ?>" class="button" <?php echo @$attr; ?>><?php echo $val; ?></a>
    <a href="#" id="file_remove_<?php echo $item['id']; ?>" class="button red" <?php if(@$infusion_mobeus_values[$item['id']] == ''){ echo ' style="display:none;"'; } ?>><?php _e('Remove', 'infusion_mobeus'); ?></a>
    <script type="text/javascript">
    jQuery(document).ready(function($){
      var hasAdded = false;
      $("#save-button").click(function(){
        hasAdded = false;
        $("span.changed").remove();
      });

      var file_frame;
      $("#file_upload_<?php echo $item['id'] ?>").on('click', function(e){
        e.preventDefault();

        if ( file_frame ) {
          file_frame.open();
          return;
        }

        file_frame = wp.media.frames.file_frame = wp.media({
          title: 'Upload Files',
          button: {
            text: 'Insert',
          },
          multiple: true  // Set to true to allow multiple files to be selected
        });

        file_frame.on( 'select', function() {
          var text = $("#text_<?php echo $item['id']; ?>");
          $('#uploaded_<?php echo $item['id']; ?>').html('');
          var selection = file_frame.state().get('selection');
          var files = [];
          selection.map(function(attachment){
            files.push(attachment.attributes.url);
          });
          text.val(files);

          for (var i=0;i<files.length;i++){
            var ext = files[i].substr(files[i].lastIndexOf(".")+1, files[i].length);
            if(ext && /^(jpg|png|jpeg|gif)$/.test(ext)){
              $('#uploaded_<?php echo $item['id']; ?>').append('<img src="'+files[i]+'" alt="" />');
              $('#file_remove_<?php echo $item['id']; ?>').show();
            }else{
              $('#uploaded_<?php echo $item['id']; ?>').append(files[i]);
            }
          }

        });

        file_frame.open();

      });

      var remove = $('#file_remove_<?php echo $item['id']; ?>');
      remove.bind('click', function(){
        remove.text('Removing...');
        $("#text_<?php echo $item['id']; ?>").val('');
        $('#uploaded_<?php echo $item['id']; ?>').html('');
        remove.text('Remove');
        remove.hide();
        return false;
      });

    });
    </script>

    <?php
  }


  // COLOR PICKER
  if($item['type'] == 'color'){
    $val = '';
    $class .= 'class="colorpicker"';
    if(array_key_exists('val', $item)) $val = ' value="'. $item['val'] .'"';
    if(array_key_exists($item['id'], $infusion_mobeus_values)) $val = ' value="'. $infusion_mobeus_values[$item['id']] .'"';
    echo '<input data-default-color="'.$item['val'].'" type="text" id="'. $item['id'] .'_cp" name="'. $prefix .'['. $item['id'] .']"'. $val . $class . $attr .' />';
  }

  if($item['type'] == 'date'){
    $class .= 'class="infusion_mobeus-datepicker"';
    if(array_key_exists('val', $item)) $val = ' value="'. $item['val'] .'"';
    if(array_key_exists($item['id'], $infusion_mobeus_values)) $val = ' value="'. $infusion_mobeus_values[$item['id']] .'"';
    echo '<input type="text" id="'. $item['id'] .'" name="'. $prefix .'['. $item['id'] .']"'. $val . $class . $attr .' data-date-format="'. $item['format'] .'" />';
    ?>
    <script>
      jQuery(document).ready(function($){
        $('#<?php echo $item["id"] ?>').datepicker();
      });
    </script>

    <?php
  }

  // HTML
  if($item['type'] == 'html'){
    echo $item['val'];
  }

  // CUSTOM
  if($item['type'] == 'custom'){
    $func = '';
    $args = array();
    $id = '';
    if(array_key_exists('function', $item)) $func = $item['function'];
    if(array_key_exists('args', $item)) $args = $item['args'];
    if(array_key_exists('id', $item)) $id = $item['id'];

    if($func != '') call_user_func($func, $id, $args);
  }

  // AFTER
  if(array_key_exists('after', $item) && $item['after'] != ''){
    echo $item['after'];
  }
  echo '</div>';
}

// ADD FRAMEWORK PAGE
function infusion_mobeus_add_framework_page( $title, $data, $order = 0 ){
  if( !is_array($data) ) return false;

  $infusion_mobeus_options = get_option('infusion_mobeus_framework_options');
  $infusion_mobeus_framework = array();
  if( is_array($infusion_mobeus_options['infusion_mobeus_framework']) ) $infusion_mobeus_framework = $infusion_mobeus_options['infusion_mobeus_framework'];

  $infusion_mobeus_framework[$order] = array( $title => $data );

  $infusion_mobeus_options['infusion_mobeus_framework'] = $infusion_mobeus_framework;
  update_option('infusion_mobeus_framework_options', $infusion_mobeus_options);
}



function infusion_mobeus_post_type_labels($singular, $plural = ''){
  if($plural = '') $plural = $singular.'s';
  return array(
    'name' => _x( $plural, 'post type general name', 'infusion_mobeus' ),
    'singular_name' => _x( $singular, 'post type singular name', 'infusion_mobeus' ),
    'add_new' => __( 'Add New', 'infusion_mobeus' ),
    'add_new_item' => sprintf( __( 'Add New %s', 'infusion_mobeus' ), $singular),
    'edit_item' => sprintf( __( 'Edit %s', 'infusion_mobeus' ), $singular),
    'new_item' => sprintf( __( 'New %s', 'infusion_mobeus' ), $singular),
    'view_item' => sprintf( __( 'View %s', 'infusion_mobeus' ), $singular),
    'search_items' => sprintf( __( 'Search %s', 'infusion_mobeus' ), $plural),
    'not_found' =>  sprintf( __( 'No %s found', 'infusion_mobeus' ), $plural),
    'not_found_in_trash' => sprintf( __( 'No %s found in Trash', 'infusion_mobeus' ), $plural),
    'parent_item_colon' => ''
  );
}


function infusion_mobeus_taxonomy_labels($singular, $plural = ''){
  if($plural = '') $plural = $singular.'s';
  return array(
    'name' => _x( $plural, 'taxonomy general name', 'infusion_mobeus' ),
    'singular_name' => _x( $singular, 'taxonomy singular name', 'infusion_mobeus' ),
    'search_items' => sprintf( __( 'Search %s', 'infusion_mobeus' ), $plural),
    'popular_items' => sprintf( __( 'Popular %s', 'infusion_mobeus' ), $plural),
    'all_items' => sprintf( __( 'All %s', 'infusion_mobeus' ), $plural),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => sprintf( __( 'Edit %s', 'infusion_mobeus' ), $singular),
    'update_item' => sprintf( __( 'Update %s', 'infusion_mobeus' ), $singular),
    'add_new_item' => sprintf( __( 'Add New %s', 'infusion_mobeus' ), $singular),
    'new_item_name' => sprintf( __( 'New %s Name', 'infusion_mobeus' ), $singular),
    'separate_items_with_commas' => sprintf( __( 'Separate %s with commas', 'infusion_mobeus' ), $plural),
    'add_or_remove_items' => sprintf( __( 'Add or remove %s', 'infusion_mobeus' ), $plural),
    'choose_from_most_used' => sprintf( __( 'Choose from the most used %s', 'infusion_mobeus' ), $plural)
  );
}



/******************************************************************************************************
* THEME UPDATES
******************************************************************************************************/

function infusion_mobeus_is_theme_activated(){
    global $pagenow;
    if ( is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" )
        return true;
    return false;
}


// GET THEME CHANGELOG
function infusion_mobeus_get_theme_changelog(){
  $infusion_mobeus_options = get_option('infusion_mobeus_framework_options');
  $log_url = INFUSION_MOBEUS_UPDATE_URL.'/'.infusion_mobeus_to_slug(INFUSION_MOBEUS_THEME_NAME).'-changelog.xml';
  $transkey = 'infusion_mobeus_latest_theme_version_'.infusion_mobeus_to_slug(INFUSION_MOBEUS_THEME_NAME);

  if(false === ($cached_xml = get_transient($transkey))){
    if(function_exists('curl_init')){
      $ch = curl_init($log_url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch, CURLOPT_TIMEOUT, 10);
      $xml = curl_exec($ch);
      curl_close($ch);
    }else{
      $xml = file_get_contents($log_url);
    }

    if($xml){
      set_transient($transkey, $xml, 3600);
    }else{
      return false;
    }
  }else{
    $xml = $cached_xml;
  }
  return @simplexml_load_string($xml);
}

// SETUP ADMIN NOTICE
function infusion_mobeus_admin_notice(){
  global $pagenow;

  if($pagenow == 'index.php' && $xml = infusion_mobeus_get_theme_changelog()){
    if(version_compare(INFUSION_MOBEUS_THEME_VERSION, $xml->latest) == -1){
      ?>
      <div id="message" class="updated">
        <p><?php printf( __( '<strong>There is a new version of the %s theme available.</strong> You have version %s installed. <a href="%s">Update to version %s</a>.', 'infusion_mobeus' ), INFUSION_MOBEUS_THEME_NAME, INFUSION_MOBEUS_THEME_VERSION, admin_url( 'admin.php?page=infusion_mobeusframework-update' ), $xml->latest); ?></p>
      </div>
      <?php
    }
  }
  return false;
}
// add_action('admin_notices', 'infusion_mobeus_admin_notice');