<fieldset>
  <legend>Disqus</legend>
  <label class="grid-group">
    <span class="grid span-1 form-label"><?php echo $speak->id . ' ' . Jot::info($speak->plugin_comment_service->description->disqus_id); ?></span>
    <span class="grid span-5"><?php echo Form::text('services[disqus][id]', $comment_service_config['services']['disqus']['id'], File::N($config->host)); ?></span>
  </label>
</fieldset>