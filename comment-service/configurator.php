<form class="form-plugin" action="<?php echo $config->url_current; ?>/update" method="post">
  <?php echo Form::hidden('token', $token); ?>
  <div class="tab-area">
    <div class="tab-button-area">
      <a class="tab-button active" href="#tab-content-1-1"><?php echo Jot::icon('comments-o', 'fw') . ' ' . $speak->activate; ?></a>
      <a class="tab-button" href="#tab-content-1-2"><?php echo Jot::icon('cogs', 'fw') . ' ' . $speak->configs; ?></a>
    </div>
    <div class="tab-content-area">
      <div class="tab-content" id="tab-content-1-1">
        <?php

        $comment_service_config = File::open(__DIR__ . DS . 'states' . DS . 'config.txt')->unserialize();

        $options = array();
        foreach(glob(__DIR__ . DS . 'workers' . DS . '*', GLOB_ONLYDIR) as $option) {
            $option = File::B($option);
            $options[$option] = isset($speak->plugin_comment_service->title->{$option}) ? $speak->plugin_comment_service->title->{$option} : Text::parse($option, '->title');
        }

        ?>
        <p><?php echo Form::select('service', $options, $comment_service_config['service']); ?></p>
      </div>
      <div class="tab-content hidden" id="tab-content-1-2">
        <?php foreach(glob(__DIR__ . DS . 'workers' . DS . '*' . DS . 'configurator.php') as $configurator): ?>
        <?php include $configurator; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <p><?php echo Jot::button('action', $speak->update); ?></p>
</form>