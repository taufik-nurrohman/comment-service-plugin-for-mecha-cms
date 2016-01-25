<fieldset>
  <legend>Facebook</legend>
  <label class="grid-group">
    <span class="grid span-1 form-label"><?php echo $speak->plugin_comment_service->title->theme; ?></span>
    <span class="grid span-5"><?php echo Form::select('services[facebook][theme]', array('light' => $speak->plugin_comment_service->title->light, 'dark' => $speak->plugin_comment_service->title->dark), $comment_service_config['services']['facebook']['theme']); ?></span>
  </label>
</fieldset>