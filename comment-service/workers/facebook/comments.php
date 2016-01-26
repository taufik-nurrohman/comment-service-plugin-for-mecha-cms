<section class="comments comments--facebook" id="comments--facebook">
  <?php $comment_service_config = File::open(File::D(__DIR__, 2) . DS . 'states' . DS . 'config.txt')->unserialize(); ?>
  <div class="fb-comments" data-href="<?php echo isset($article->url) ? $article->url : $config->url_current; ?>" data-numposts="5" data-width="100%" data-colorscheme="<?php echo $comment_service_config['services']['facebook']['theme']; ?>"></div>
</section>