<?php
   if( $scd_option['scd_url_txt_facebook'] ) {
    echo '<div class="modernflat" style="background: #3b5998 url('.$cdn.'modernflat/fb.png) 0px 0px no-repeat; "><a href="'.$scd_option['scd_url_txt_facebook'].'" target="_blank" class="social">Facebook</a></div>';
   }
   if( $scd_option['scd_url_txt_twitter'] ) {
    echo '<div class="modernflat" style="background: #3b5998 url('.$cdn.'modernflat/tw.png) 0px 0px no-repeat; "><a href="'.$scd_option['scd_url_txt_twitter'].'" target="_blank" class="social">Twitter</a></div>';
   }
   if( $scd_option['scd_url_txt_gplus'] ) {
    echo '<div class="modernflat" style="background: #3b5998 url('.$cdn.'modernflat/gp.png) 0px 0px no-repeat; "><a href="'.$scd_option['scd_url_txt_gplus'].'" target="_blank" class="social">Google+</a></div>';
   }
   if( $scd_option['scd_url_txt_tumblr'] ) {
    echo '<div class="modernflat" style="background: #3b5998 url('.$cdn.'modernflat/tm.png) 0px 0px no-repeat; "><a href="'.$scd_option['scd_url_txt_tumblr'].'" target="_blank" class="social">Tumblr</a></div>';
   }
   if( $scd_option['scd_url_txt_instagram'] ) {
    echo '<div class="modernflat" style="background: #3b5998 url('.$cdn.'modernflat/ig.png) 0px 0px no-repeat; "><a href="'.$scd_option['scd_url_txt_instagram'].'" target="_blank" class="social">Instagram</a></div>';
   }
   if( $scd_option['scd_url_txt_pintrest'] ) {
    echo '<div class="modernflat" style="background: #3b5998 url('.$cdn.'modernflat/pi.png) 0px 0px no-repeat; "><a href="'.$scd_option['scd_url_txt_pintrest'].'" target="_blank" class="social">Pintrest</a></div>';
   }
   if( $scd_option['scd_url_txt_linkedin'] ) {
    echo '<div class="modernflat" style="background: #3b5998 url('.$cdn.'modernflat/in.png) 0px 0px no-repeat; "><a href="'.$scd_option['scd_url_txt_linkedin'].'" target="_blank" class="social">LinkedIn</a></div>';
   }
   if( $scd_option['scd_url_txt_youtube'] ) {
    echo '<div class="modernflat" style="background: #3b5998 url('.$cdn.'modernflat/yt.png) 0px 0px no-repeat; "><a href="'.$scd_option['scd_url_txt_youtube'].'" target="_blank" class="social">YouTube</a></div>';
   }
   if( $scd_option['scd_rss_checkbox'] ) {
     echo '<div class="scd-rss"><a href="'?><?php bloginfo('rss2_url'); ?><?php echo '" target="_blank" class="social">RSS</a></div>';
   }
?>