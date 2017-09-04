    <footer>
      <div class="row">
      <div class="medium-6 columns">
        <div class="title title_footer footer_contact_title">Community</div>
        <span><?php the_field('text','options') ?></span>
      </div>
        <div class="medium-6 columns">
            <?php if(have_rows('social', 'options')): ?>
              <div class="title title_footer footer_social_title">Social</div>
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
      <div class="sub_footer">      
        <div class="row">
          <div class="medium-6 columns">
            <div>© 2017 swiftfest </div>
          </div>
          <div class="medium-6 columns">
            <div class="credits">Crafted by <strong>Double Espresso</strong></div>
          </div>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>