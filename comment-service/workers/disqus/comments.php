<section class="comments comments--disqus" id="comments--disqus">
  <?php

  $comment_service_config = File::open(File::D(__DIR__, 2) . DS . 'states' . DS . 'config.txt')->unserialize();

  if( ! isset($article)) {
      $article = (object) array(
          'url' => $config->url_current,
          'id' => md5($config->url_current)
      );
  }

  ?>
  <?php if($comment_service_config['services']['disqus']['id'] === ""): ?>
  <p><?php echo $speak->plugin_comment_service->description->disqus_id; ?></p>
  <?php else: ?>
  <div id="disqus_thread"></div>
  <script>var disqus_config=function(){this.page.url='<?php echo $article->url; ?>',this.page.identifier='<?php echo $article->id; ?>'};!function(){var e=document,t=e.createElement("script");t.src="//<?php echo $comment_service_config['services']['disqus']['id']; ?>.disqus.com/embed.js",t.setAttribute("data-timestamp",+new Date),(e.head||e.body).appendChild(t)}();</script>
  <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
  <?php endif; ?>
</section>