<?php

// include once ...
if( ! Config::get('__js_google_plusone_1', false)) {
    Weapon::add('meta', function() {
        echo Asset::javascript('https://apis.google.com/js/plusone.js');
    }, 30);
    Config::set('__js_google_plusone_1', true);
}