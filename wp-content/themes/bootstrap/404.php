<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 */
?>
<?php get_header(); ?>

<div id="primary" class="container">
    <main id="main" class="site-main" role="main">

        <section class="error-404 not-found">

            <head class="page-header">
                <h1 class="page-title">Sorry, page not found!</h1>
            </head>

            <div class="page-content">

                <p>It looks like nothing was found at this location. Maybe try one of the links below or a search?</p>

                <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div>
                    <label class="screen-reader-text" for="s">Search:</label>
                    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
                    <input type="submit" id="searchsubmit" value="Search" />
                </div>
                </form>

                <?php the_widget( 'WP_Widget_Recent_Posts'); ?>

                <div class="widget widget_categories">
                    <h2>Check the most used categories</h2>
                    <ul>
                        <?php wp_list_categories( array( 'orderby'=> 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 5, ) );?>
                    </ul>
                </div>

                <?php
                $archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s' ), convert_smilies( ':)' ) ) . '</p>';
                the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
                ?>

                <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
            </div>

        </section>

    </main>
</div>

<?php get_footer(); ?>