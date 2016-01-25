<?php

$comment_service_config = File::open(__DIR__ . DS . 'states' . DS . 'config.txt')->unserialize(array(
    'service' => 'disqus'
));

require __DIR__ . DS . 'workers' . DS . $comment_service_config['service'] . DS . 'launch.php';

Filter::add('chunk:path', function($path) use($comment_service_config) {
    if(File::N($path) === 'comments') {
        return __DIR__ . DS . 'workers' . DS . $comment_service_config['service'] . DS . 'comments.php';
    }
    return $path;
});