<?php
  $tickets_title = wave_get_post_meta($sectionMeta, "title", $sectionCounter, TRUE);
  $tickets_subtitle = wave_get_post_meta($sectionMeta, "subtitle", $sectionCounter, TRUE);
  $tickets_repeater = get_sub_field('ticket');
?>
<section class="tickets" id="tickets_section">
  <div class="row">
    <div class="medium-12 columns">
      <?php if($tickets_title): ?>
        <h2 class="title tickets_title"><?php echo $tickets_title; ?></h2>
      <?php endif; ?>
      <?php if($tickets_subtitle): ?>
        <h4 class="current-text tickets_subtitle"><?php echo $tickets_subtitle; ?></h4>
      <?php endif; ?>
    </div>
  </div>

  <div class="ticket_container"> 
  <div class="row collapse">
    <div class="large-12 large-centered columns">
      <div class="row">
        <?php if(have_rows('ticket')): ?>
          <?php while (have_rows('ticket')): the_row(); ?>
            <?php $tickets_availability = get_sub_field('available'); ?>
            <div class="large-4 medium-6 columns end">
              <div class="ticket_card <?php echo ($tickets_availability == 'no') ? 'not_available' : ''; ?><?php echo ($tickets_availability == 'sold_out') ? 'sold_out' : ''; ?>">
                <div class="title-mini card_title"><?php the_sub_field('title') ?></div>
                <div class="current-text card_date"><?php the_sub_field('date_range') ?></div>
                <div class="card_icon" style="background-image: url('<?php the_sub_field('icon') ?>');"></div>
                <div class="title card_price">$<?php the_sub_field('price') ?></div>
                <a href="<?php the_sub_field('button_link'); ?>" target="_blank" title="<?php the_sub_field('button_label'); ?>" class="button">
                  <?php echo ($tickets_availability == 'sold_out') ? 'SOLD OUT' : the_sub_field('button_label'); ?>
                </a>
                <?php if($tickets_availability == 'sold_out'): ?>
                  <div class="sold_out_badge"></div>
                <?php  endif; ?>
              </div>
            </div>
          <?php endwhile; ?>
        <?php  endif; ?>
      </div>
    </div>
  </div>
  </div>
</section>