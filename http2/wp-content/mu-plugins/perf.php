<?php

if ( ! is_admin() ) {
    header( 'Link: <https://http2.wphttp.com/wp-content/mu-plugins/perf/critical.css?ver=1>; rel=preload; as=stylesheet' );
    header( 'Link: <https://http2.wphttp.com/wp-includes/js/jquery/jquery.js?ver=1.11.3>; rel=preload; as=script' );
}

add_action( 'after_setup_theme', function() {
    wp_enqueue_style(
        'twentysixteen-style-critical',
        plugins_url( 'perf/critical.css', __FILE__ ),
        array(),
        1
    );
}, 100 );

add_action( 'wp_footer', function() {
    ?>
    <script id="twenty-sixteen-css">var ms=document.createElement("link");ms.rel="stylesheet";ms.href="https://http2.wphttp.com/wp-content/themes/twentysixteen/style.css?ver=4.3";document.getElementsByTagName("head")[0].appendChild(ms);</script>
    <?php
} );
