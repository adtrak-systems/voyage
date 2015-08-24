<?php
  # Home Page
  
  get_header(); 
?>

<main id="main" class="site-main" role="main">
    <?php if ( have_posts() ) { 
        while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
            <header class="entry-header">
                <h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
            </header>

            <div class="entry-content">
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
            </div>
        </article>

        <?php endwhile;
    } else { ?>

        <article id="post-0" class="post no-results not-found">
            <header class="entry-header">
                <h1><?php _e( 'Not found', 'voyage' ); ?></h1>
            </header>
            
            <div class="entry-content">
                <p><?php _e( 'Sorry, but your request could not be completed.', 'voyage' ); ?></p>
                <?php get_search_form(); ?>
            </div>
        </article>

    <?php } ?>
</main>

<?php get_footer(); ?>