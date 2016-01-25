<?php

// include once ...
if( ! Config::get('__js_disqus_count_1', false)) {
    Weapon::add('meta', function() {
        echo Asset::javascript('//mecha-cms.disqus.com/count.js', ' id="dsq-count-scr" async');
    }, 30);
    Config::get('__js_disqus_count_1', true);
}