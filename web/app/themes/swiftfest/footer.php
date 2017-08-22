    <footer>
      <div class="row">
        <div class="medium-8 medium-centered columns">
            <?php if(have_rows('social', 'options')): ?>
              <nav class="social">
                <ul>
                  <?php while (have_rows('social', 'options')): the_row(); ?>
                    <li>
                      <a href="<?php the_sub_field('url'); ?>" title="<?php the_sub_field('name'); ?>" target="_blank" class="avatar_social"><?php the_sub_field('name'); ?></a>
                    </li>
                  <?php endwhile; ?>
                </ul>
              </nav>
            <?php endif; ?>
        </div>
      </div>
      <div class="row">
        <div class="medium-8 medium-centered columns">
          <div class="current-text credits"><?php the_field('text','options') ?></div>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>