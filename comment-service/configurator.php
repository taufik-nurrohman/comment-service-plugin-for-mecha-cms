<form class="form-plugin" action="<?php echo $config->url_current; ?>/update" method="post">
  <?php echo Form::hidden('token', $token); ?>
  <?php

  $comment_service_config = File::open(__DIR__ . DS . 'states' . DS . 'config.txt')->unserialize();

  $options = array();
  foreach(glob(__DIR__ . DS . 'workers' . DS . '*', GLOB_ONLYDIR) as $option) {
      $option = File::B($option);
      $options[$option] = isset($speak->plugin_comment_service->title->{$option}) ? $speak->plugin_comment_service->title->{$option} : Text::parse($option, '->title');
  }

  ?>
  <label class="grid-group">
    <span class="grid span-1 form-label"><?php echo $speak->activate; ?></span>
    <span class="grid span-5"><?php echo Form::select('service', $options, $comment_service_config['service']); ?></span>
  </label>
  <hr>
  <?php foreach(glob(__DIR__ . DS . 'workers' . DS . '*' . DS . 'configurator.php') as $configurator): ?>
  <?php include $configurator; ?>
  <?php endforeach; ?>
  <p><?php echo Jot::button('action', $speak->update); ?></p>
</form>