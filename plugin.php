<?php
/**
Plugin Name: Whatsapp: quickshare
Plugin URI: http://yourls.org/
Description: Add Whatsapp api to YOURLS
Version: 1.0
Author: Wisse Hes
Author URI: wisse@wissehes.nl
**/
yourls_add_action( 'share_links', 'prb_yourls_whatsapp' );
function prb_yourls_whatsapp( $args ) {
    list( $longurl, $shorturl, $title, $text ) = $args;
    $shorturl = rawurlencode( $shorturl );
    $title = rawurlencode( htmlspecialchars_decode( $title ) );
    $prb_path = YOURLS_PLUGINURL . '/' . yourls_plugin_basename( dirname(__FILE__) );
    $prb_icon = $prb_path.'/whatsapp.png';
    echo <<<WHATSAPP
    <style type="text/css">
    #share_wa{
        background:transparent url("$prb_icon") left center no-repeat;
    }
    </style>
    <a id="share_wa"
        title="Share via whatsapp"
        onclick="javascript:window.open(this.href,'#tweet_body1', 'menubar=no,toolbar=no,height=1024,width=768,left=100');return false;">Whatsapp
    </a>
    <script type="text/javascript">
    // Dynamically update Whatsapp link
    // when user clicks on the "Share" Action icon, event $('#q1').keypress() is fired, so we'll add to this
      $('#tweet_body').keypress(function(){
          var wa_title = encodeURIComponent( $('#titlelink').val() );
          var wa_url = encodeURIComponent( $('#copylink').val() );
          var wa = 'https://api.whatsapp.com/send?text='+wa_title+', '+wa_url;
          $('#share_wa').attr('href', wa);        
      });
    </script>
    
WHATSAPP;
}