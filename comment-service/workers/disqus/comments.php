<section class="comments comments--disqus">
  <div id="disqus_thread"></div>
  <?php

  if( ! isset($article)) {
      $article = (object) array(
          'url' => $config->url_current,
          'id' => md5($config->url_current)
      );
  }

  ?>
  <script>var disqus_config=function(){this.page.url='<?php echo $article->url; ?>',this.page.identifier='<?php echo $article->id; ?>'};!function(){var e=document,t=e.createElement("script");t.src="//mecha-cms.disqus.com/embed.js",t.setAttribute("data-timestamp",+new Date),(e.head||e.body).appendChild(t)}();</script>
  <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
</section>