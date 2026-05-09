<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <h1 class="listing-archive-title">Yritykset</h1>

            <?php if ( have_posts() ) : ?>

                <div class="listing-grid">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php
                        // Get ACF fields
                         $description = get_field( 'yrityksenyrittajan_kuvaus');
                         $terms    = get_the_terms( get_the_ID(), 'service' );
                         $location    = get_the_terms( get_the_ID(), 'location' );
                        ?>

                        <article class="linsting-item">
                            <a href="<?php the_permalink(); ?>">

                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="listing__image">
                                        <?php the_post_thumbnail( 'medium') ?>
                                    </div>
                                <?php endif; ?>

                                <div class="listing__info">
                                    <h2 class="listing__title">
                                        <?php the_title() ?>
                                    </h2>
                                    <?php if( has_excerpt() ): ?>
                                        <div class="listing__excerpt">
                                            <?php the_excerpt() ?>
                                    </div>
                                        <?php endif; ?>
                                </div>

                            </a>
                            <div class="listing__category-link">
                            <?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
                               <?php foreach ( $terms as $term ) : ?>
                                <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="single__category">
                                    <?php echo esc_html( $term->name ); ?>
                                </a>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            </div>

                           
                        </article>

                    <?php endwhile; ?>

                </div>

            <?php else : ?>
                <p>No projects found.</p>
            <?php endif; ?>

        </main>
    </div>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>
