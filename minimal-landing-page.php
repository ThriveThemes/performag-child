<?php
/*
  Template Name: Minimal Landing Page
 */
?>
<?php
$options = thrive_get_options_for_post(get_the_ID());
?>
<?php //get_header('landing');
wp_head(); ?>

<?php if (have_posts()): ?>

    <?php while (have_posts()): ?>

        <?php the_post(); ?>

        <div class="wrp cnt">

            <section class="bSe fullWidth lnd">
                <article>
                    <div class="awr">
                        <?php if ($options['show_post_title'] != 0): ?>
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                        <?php endif; ?>

                        <?php get_template_part('content-page'); ?>

                        <?php if (comments_open() && !post_password_required() && $options['comments_on_pages'] != 0) : ?>
                            <?php comments_template('', true); ?>
                        <?php elseif ((!comments_open()) && get_comments_number() > 0): ?>
                            <?php comments_template('/comments-disabled.php'); ?>
                        <?php endif; ?>
                    </div>
                </article>
            </section>

        </div>

    <?php endwhile; ?>
<?php endif; ?>

<?php //get_footer();
wp_footer(); ?>