
<?php $intro = get_field('intro'); ?>
<?php if ( $intro == "siri" ): ?>
  <?php get_header('siri'); ?>
<?php elseif ( $intro == "transformation" ): ?>
  <?php get_header('cynthia'); ?>
<?php elseif ( $intro == "no" ): ?>
  <?php get_header(); ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<?php while ( have_posts() ): the_post(); ?>
  <section class="keynote_speaker_hero" <?php if ( has_post_thumbnail() ): ?> style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');" <?php endif; ?> >
    <div class="row">
      <div class="medium-5 columns">
        <div class="speaker_info">
          <div class="speaker_suptitle"><?php echo(get_field('type')); ?></div>
          <h1 class="title-huge speaker_title"><?php the_title(); ?></h1>
          <div class="current_text speaker_short_description"><?php echo(get_field('short_descriprion')); ?></div>
        </div>
      </div>
    </div>
  </section>
  <?php if ( $intro == "siri" || $intro == "transformation" ): ?>
  <section class="keynote_speaker_about">
    <div class="row">
      <div class="small-12 columns">
        <div class="general-ui about_suptitle">about</div>
        <div class=" title about_title"><?php the_title(); ?></div>
      </div>
    </div>
    <div class="row">
      <div class="medium-4 columns">
        <nav class="speaker_social">
          <ul>
            <?php while (have_rows('social')): the_row(); ?>
              <li>
                <a href="<?php the_sub_field('url'); ?>" title="<?php the_sub_field('name'); ?>" target="_blank" class="avatar_social"><span><?php the_sub_field('name'); ?></span></a>
              </li>
            <?php endwhile; ?>
          </ul>
        </nav>
      </div>
      <div class="medium-8 columns">
        <div class="speaker_about_text">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>
  <?php else: ?>
  <section class="keynote_speaker_talk">
    <div class="row">
      <div class="small-12 columns">
        <div class="general-ui about_suptitle">talk</div>
        <div class=" title about_title"><?php echo(get_field('talk_title')); ?></div>
      </div>
    </div>
    <div class="row">
      <div class="medium-4 columns">
      </div>
      <div class="medium-8 columns">
        <div class="talk_text">
          <?php echo(get_field('talk_description')); ?>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <section class="main_media">
    <div class="row">
      <div class="mall-12 columns">
        <img src="<?php echo (get_field('main_media')); ?>">
      </div>
    </div>
  </section>
  <?php if ( $intro == "siri" || $intro == "transformation" ): ?>
  <section class="keynote_speaker_talk">
    <div class="row">
      <div class="small-12 columns">
        <div class="general-ui about_suptitle">talk</div>
        <div class=" title about_title"><?php echo(get_field('talk_title')); ?></div>
      </div>
    </div>
    <div class="row">
      <div class="medium-4 columns">
      </div>
      <div class="medium-8 columns">
        <div class="talk_text">
          <?php echo(get_field('talk_description')); ?>
        </div>
      </div>
    </div>
  </section>
  <?php else: ?>
  <section class="keynote_speaker_about">
    <div class="row">
      <div class="small-12 columns">
        <div class="general-ui about_suptitle">about</div>
        <div class=" title about_title"><?php the_title(); ?></div>
      </div>
    </div>
    <div class="row">
      <div class="medium-4 columns">
        <nav class="speaker_social">
          <ul>
            <?php while (have_rows('social')): the_row(); ?>
              <li>
                <a href="<?php the_sub_field('url'); ?>" title="<?php the_sub_field('name'); ?>" target="_blank" class="avatar_social"><span><?php the_sub_field('name'); ?></span></a>
              </li>
            <?php endwhile; ?>
          </ul>
        </nav>
      </div>
      <div class="medium-8 columns">
        <div class="speaker_about_text">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <section class="ticket_CTA">
    <div class="row">
      <div class="small-12 columns">
        <div class="cta_info">        
          <div class="title CTA_title">swiftfest 2017</div>
          <div class="title-small CTA_subtitle">Boston 29 - 30 November</div>
          <a href="https://www.eventbrite.com/e/swiftfest-2017-tickets-37370599469" title="Buy Tickets" target="_blank" class="squared-button white hero_button">
          buy tickets
          </a>
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSffougjfUt4bjecHeKWMgvhbiUBryAN-sU9irHQ-Ytdyih0Og/viewform" title="Call for Paper" target="_blank" class="squared-button white hero_button">
          call for paper
          </a>
        </div>
      </div>
    </div>
  </section>
<?php endwhile; ?>
<?php get_footer(); ?>