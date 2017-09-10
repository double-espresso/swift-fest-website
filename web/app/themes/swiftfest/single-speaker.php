<?php get_header(); ?>
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
  <section class="keynote_speaker_about">
    <div class="row">
      <div class="small-12 columns">
        <div class="general-ui about_suptitle">about</div>
        <div class=" title about_title"><?php the_title(); ?></div>
      </div>
    </div>
    <div class="row">
      <div class="medium-4 columns">
        <div class="speaker_social">Social here</div>
      </div>
      <div class="medium-8 columns">
        <div class="speaker_about_text">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>
  <section class="ticket_CTA">
    <div class="row">
      <div class="small-12 columns">
        <div class="cta_info">        
          <div class="title CTA_title">swiftfest 2017</div>
          <div class="title-small CTA_subtitle">Boston 29 - 30 November</div>
          <a href="https://www.eventbrite.com/e/swiftfest-2017-tickets-37370599469" title="swiftfest tickets" class="rounded-button white hero_button">
          buy tickets
          </a>
        </div>
      </div>
    </div>
  </section>
<?php endwhile; ?>
<?php get_footer(); ?>