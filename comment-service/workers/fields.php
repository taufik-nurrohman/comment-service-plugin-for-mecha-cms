<?php

$comment_service_config = File::open(File::D(__DIR__) . DS . 'states' . DS . 'config.txt')->unserialize();
foreach(glob(__DIR__ . DS . '*', GLOB_ONLYDIR) as $option) {
    $option = File::B($option);
    $text = isset($speak->plugin_comment_service->title->{$option}) ? $speak->plugin_comment_service->title->{$option} : Text::parse($option, '->title');
    if($comment_service_config['service'] === $option) {
        $text .= ' &#10004;';
    }
    $options[$speak->plugin_comment_service_title][$option] = $text;
}

$options[$speak->deactivate][0] = $speak->deactivate;

return array(
    'comment_service' => array(
        'title' => $speak->plugin_comment_service_title,
        'type' => 'option',
        'value' => $options,
        'placeholder' => '&#10004;'
    )
);