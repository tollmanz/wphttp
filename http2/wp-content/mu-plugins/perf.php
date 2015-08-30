<?php

if ( ! is_admin() ) {
    header( 'Link: <https://http2.wphttp.com/wp-content/themes/twentysixteen/style.css?ver=4.3>; rel=preload; as=stylesheet' );
    header( 'Link: <https://http2.wphttp.com/wp-includes/js/jquery/jquery.js?ver=1.11.3>; rel=preload; as=script' );
}
