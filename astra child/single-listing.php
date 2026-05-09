<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php if ( have_posts() ) : ?>
                <?php
                        // Get ACF fields
                         $phonenumber = get_field('puhelin_numero');
                         $email = get_field('sahkoposti');
                         $address = get_field('osoite');
                         $description = get_field( 'yrityksenyrittajan_kuvaus');
                         $terms    = get_the_terms( get_the_ID(), 'service' );
                         $location    = get_the_terms( get_the_ID(), 'location' );
                         $image = get_field('kuva');
                        ?>
                

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="single__thumbnail_image">
                                        <?php the_post_thumbnail( 'large') ?>
                                    </div>
                        <?php endif; ?>

                <div class="single__grid">
                    <section class="single__heading">
                        <h1 class="single__title">
                            <?php the_title() ?>
                        </h1>
                        <div class="single__category-link">
                            <?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
                               <?php foreach ( $terms as $term ) : ?>
                                <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="single__category">
                                    <?php echo esc_html( $term->name ); ?>
                                </a>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </section>

                    <section class="single-item">
                            
                        <div class="single__info-left">
                                    
                            <?php if( $description ): ?>
                            <div class="single__description">
                                <?php echo esc_html( $description ); ?>
                            </div>
                            <?php endif; ?>
                            <?php if( $image): ?>
                                <div class="single__image">
                            <img
                                src="<?php echo esc_url( $image['url'] ); ?>"
                                alt="<?php echo esc_attr( $image['alt'] ); ?>"
                            />
                        </div>
                            <?php endif; ?>
                        </div>
                        <div class="single__info-right">
                            <?php //info & iframe for google maps?>
                            <div class="single__metainfo">
                                <h2>Yhteystiedot: </h2>
                                <?php if( $phonenumber ): ?>
                                    <div>
                                    <span class="single__contact-email">Puhelinnumero: </span>
                                    <?php echo esc_html( $phonenumber ); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if( $email ): ?>
                                    <div>
                                    <span class="single__contact-email">Sähköposti: </span>
                                    <?php echo esc_html( $email ); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if( $address ): ?>
                                    <div>
                                    <span class="single__contact-email">Osoite: </span>
                                    <?php echo esc_html( $address ); ?>
                                    </div>
                                <?php endif; ?>
                                
                            </div>
                            <div class="single__iframe"></div>
                        </div>
                           
                    </section>

                    <?php endwhile; ?>

                </div>

            <?php else : ?>
                <p>No projects found.</p>
            <?php endif; ?>

        </main>
    </div>


<?php get_footer(); ?>