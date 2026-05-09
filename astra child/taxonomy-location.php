<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php 
            $term = get_queried_object(); ?>
            <h1 class="service-archive-title">
                <?php echo esc_html( $term->name); ?>
            </h1>

            <?php if( $term->description ) : ?>
                <p class="service__category_desctiption">
                    <?php echo esc_html( $term->description); ?>
                </p>
            <?php endif; ?>
            <?php if ( have_posts() ) : ?>

                <div class="service-grid">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php
                        // Get ACF fields
                         $description = get_field( 'yrityksenyrittajan_kuvaus');
                         $terms    = get_the_terms( get_the_ID(), 'service' );
                         $location    = get_the_terms( get_the_ID(), 'location' );
                        ?>

                        <article class="service-item">
                            <a href="<?php the_permalink(); ?>">

                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="service__image">
                                        <?php the_post_thumbnail( 'medium') ?>
                                    </div>
                                <?php endif; ?>

                                <div class="service__info">
                                    <h2 class="service__title">
                                        <?php the_title() ?>
                                    </h2>
                                    <?php if( has_excerpt() ): ?>
                                        <div class="service__excerpt">
                                            <?php the_excerpt() ?>
                                    </div>
                                        <?php endif; ?>
                                </div>

                            </a>
                            <div class="service__category-link">
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


<?php get_footer(); ?>
