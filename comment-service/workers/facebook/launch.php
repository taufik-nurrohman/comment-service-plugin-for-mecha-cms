<?php

// include once ...
if( ! Config::get('__js_facebook_sdk_1', false)) {
    Weapon::add('cargo_before', function() use($config) {
        echo '<div id="fb-root"></div><script>!function(e,t,n){var o,c=e.getElementsByTagName(t)[0];e.getElementById(n)||(o=e.createElement(t),o.id=n,o.src="//connect.facebook.net/' . $config->language . '/sdk.js#xfbml=1&version=v2.5",c.parentNode.insertBefore(o,c))}(document,"script","facebook-jssdk");</script>';
    });
    Config::set('__js_facebook_sdk_1', true);
}