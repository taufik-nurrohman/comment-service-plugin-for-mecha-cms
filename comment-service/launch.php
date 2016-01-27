<?php

Weapon::add('shield_before', function() {
    $config = Config::get();
    if($config->comments->allow) {
        $comment_service_config = File::open(__DIR__ . DS . 'states' . DS . 'config.txt')->unserialize();
        Config::set('plugins.comment_service_config', $comment_service_config);
        $active = $comment_service_config['service'];
        if($s = Config::get($config->page_type)) {
            $active = isset($s->fields->comment_service) && trim($s->fields->comment_service) !== "" ? $s->fields->comment_service : $active;
        }
        if($launch = File::exist(__DIR__ . DS . 'workers' . DS . $active . DS . 'launch.php')) {
            require $launch;
        }
        Filter::add('chunk:path', function($path) use($active) {
            if($active !== 0 && File::N($path) === 'comments') {
                return __DIR__ . DS . 'workers' . DS . $active . DS . 'comments.php';
            }
            return $path;
        });
    }
});