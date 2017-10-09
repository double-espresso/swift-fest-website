<?php
  $team_relation = get_sub_field('team');
?>
<section class="team" id="team_section">
  <?php if($team_relation): ?>
  <div class="team_relation">
    <div class="row">
      <?php foreach ($team_relation as $post): ?>
        <?php setup_postdata($post); ?>
        <?php $url_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'team' ); ?>
        <div class=" large-4 medium-6 small-12 columns end">
          <div class="relation_single">

            <?php if ($url_image): ?>
              <div class="single_avatar" style="background-image: url(<?php echo $url_image[0] ?>)">
              </div>
            <?php endif; ?>

            <div class="member_info parallax" data-rellax-speed="1" data-rellax-percentage="0.5">            
              <div class="general-ui single_role"><?php the_field('role'); ?></div>
              <div class="title single_title"><?php the_title(); ?></div>
              <?php if(have_rows('social')): ?>
                <div class="single_social">
                  <ul>
                    <?php while (have_rows('social')): the_row(); ?>
                      <li>
                        <a href="<?php the_sub_field('url'); ?>" title="<?php the_sub_field('name'); ?>" target="_blank" class="avatar_social"><?php the_sub_field('name'); ?></a>
                      </li>
                    <?php endwhile; ?>
                  </ul>
                </div>
              <?php endif; ?>
            </div>

          </div>
        </div>
      <?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
    </div>
  </div>
<?php endif; ?>
</section>
