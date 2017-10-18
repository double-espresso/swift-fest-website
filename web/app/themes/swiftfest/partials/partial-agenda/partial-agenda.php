<?php
  $days_repeater = get_sub_field('days');
  $day_counter = 0;
?>
<section class="agenda" id="agenda_section">

  <div class="day_tab">
    <div class="row">
      <div class="small-12 columns">    
        <ul>
          <li class="single_day_tab tab_0 selected">November 29</li>
          <li class="single_day_tab tab_1">November 30</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="agenda_container">
    <?php if(have_rows('days')): ?>
      <?php while (have_rows('days')): the_row(); ?>
        <div class="agenda_schedule schedule_<?php echo $day_counter; ?>">
          <?php if(have_rows('schedule')): ?>
            <?php while (have_rows('schedule')): the_row(); ?>
              <?php
                $type = get_sub_field('type');
                $talk = get_sub_field('talk'); 
                $other = get_sub_field('other');
              ?>           
              <div class="row">

                <?php if($type == 'talk'): ?>

                  <?php if(have_rows('talk')): ?>
                    <?php while (have_rows('talk')): the_row(); ?>
                    <?php  
                      $speaker = get_sub_field('speaker');
                      $hour = get_sub_field('hour');
                    ?>

                      <div class="medium-12 columns end">
                        <div class="talk_cell">
                          <div class="talk_info_container">                        
                            <div class="hour">
                              <?php echo ($hour); ?>
                            </div>
                            <?php if($speaker): ?>
                              <?php foreach ($speaker as $post): ?>
                                <?php setup_postdata($post); ?>
                                <?php 
                                  $post_slug=$post->post_name;
                                  $speach_type = get_field('speach_type');
                                ?>
                                <div class="talk_container">
                                  <a href="<?php the_permalink(); ?>" title="<?php the_field('talk_title'); ?>">
                                    <h3 class="title talk_title"><?php the_field('talk_title'); ?></h3>
                                  </a>
                                  <div class="speaker_name"><?php the_title(); ?></div>
                                </div>
                              <?php endforeach; ?>
                              <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>

                    <?php endwhile; ?>
                  <?php  endif; ?>

                <?php elseif($type == 'other'): ?>
                  <div class="other_container">
                    <?php if(have_rows('other')): ?>
                      <?php while (have_rows('other')): the_row(); ?>
                        <?php
                          $icon = get_sub_field('icon');
                        ?>
                      <div class="small-12 columns">
                        <div class="other_cell">
                          <div class="hour"><?php the_sub_field('hour'); ?></div>
                          <div class="text">
                            <?php if($icon): ?>
                              <div class="icon" style="background-image: url('<?php the_sub_field('icon'); ?>');"></div>
                            <?php  endif; ?>
                            <?php the_sub_field('text'); ?>
                          </div>
                        </div>
                      </div>
                      <?php endwhile; ?>
                    <?php  endif; ?>
                  </div>
                <?php  endif; ?>
              </div>
            <?php endwhile; ?>
          <?php  endif; ?>
        </div>
        <?php $day_counter++; ?>
      <?php endwhile; ?>
    <?php  endif; ?>
  </div>
</section>