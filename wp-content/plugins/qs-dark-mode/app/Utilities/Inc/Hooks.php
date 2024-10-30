<?php 
  

  add_filter( 'upload_mimes' , 'qs_dark_mode_mime_types' );
  add_filter( 'qs_dm_localize_options' , 'qs_dark_mode_lite_localize_options_theme_preset' , 10 );

  function qs_dark_mode_lite_localize_options_theme_preset($options){
            
    $options['theme_preset']       = qs_dark_mode_theme_preset();
    $options['qs_dm_lite_version'] = QS_DARK_MODE_LITE_VERSION;
    return $options;
  }

  // Mime Type svg support
  function qs_dark_mode_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }

  // preloader

  add_action('wp_body_open','qs_dark_mode_wp_body_open');

  if( !function_exists('qs_dark_mode_wp_body_open') ){

    function qs_dark_mode_wp_body_open(){

        $qs_dark_mode_theme_preset = qs_dark_mode_theme_preset();  
        $qs_dark_mode_theme_preset = json_decode($qs_dark_mode_theme_preset,true);
        $bg_color = isset( $qs_dark_mode_theme_preset['--qs-dm-bg'] ) ? $qs_dark_mode_theme_preset['--qs-dm-bg']: '#0000';
        $option = get_option('qsf_dark_mode_theme_preset_options');

        if( $option && isset($option['theme_custom_color']) && $option['theme_custom_color'] == 'on' ){
            
            $bg_color = qs_dark_mode_theme_background_color();
          
        }

        if(qs_dark_mode_active() && qs_dark_mode_default()){
          echo sprintf('<div class="qs-skip-dark-mode qs-dark-mode-preloader-overlay" style="background-color:%s"> </div>', esc_attr($bg_color));
        }
        
    }
  }
