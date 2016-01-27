<section class="comments comments--facebook" id="comments--facebook">
  <?php $comment_service_config = Config::get('plugins.comment_service_config'); ?>
  <div class="fb-comments" data-href="<?php echo isset($article->url) ? $article->url : $config->url_current; ?>" data-numposts="5" data-width="100%" data-colorscheme="<?php echo $comment_service_config->services->facebook->theme; ?>"></div>
</section>