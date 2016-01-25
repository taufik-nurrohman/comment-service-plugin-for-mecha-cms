<?php

$options = array();
foreach(glob(__DIR__ . DS . '*', GLOB_ONLYDIR) as $option) {
    $option = File::B($option);
    $options[$option] = isset($speak->plugin_comment_service->title->{$option}) ? $speak->plugin_comment_service->title->{$option} : Text::parse($option, '->title');
}

$options['false'] => '&ndash; ' . $speak->disable . ' &ndash;';

return array(
    'comment_service' => array(
        'title' => 'Comment Service',
        'type' => 'option',
        'value' => $options,
        'placeholder' => '&ndash; Inherit &ndash;',
        'description' => 'Inherit means, the field value will follow the configuration data you define in the plugin manager page.',
    )
);