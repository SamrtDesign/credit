<?php get_header(); ?>

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                    <h2><?php echo esc_html('Blog / Author: ', 'credit') ?><?php wp_title( '' ); ?> </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url('/') ) ?>"><?php esc_html_e('Home', 'credit') ?></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo esc_url( home_url('/blog') ) ?>"><?php esc_html_e('Blog', 'credit') ?></a> <?php esc_html_e('/ Author', 'credit') ?> <?php wp_title( '' ); ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### News Area Start ##### -->
    <section class="news-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Single News Area -->
                <div class="col-12 col-lg-8">

                    <!-- Single Blog Area -->
                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                        <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
                    <?php endwhile; else: ?>
                        <?php get_template_part('template-parts/content', 'none') ?>
                    <?php endif; ?>


                    <!-- Pagination -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <?php the_posts_pagination( array(
                                'mid_size'  => 4,
                                'prev_text' => __( '<i class="fas fa-arrow-left"></i>', 'credit' ),
                                'next_text' => __( '<i class="fas fa-arrow-right"></i>', 'credit' ),
                            ) ); ?>
                        </ul>
                    </nav>
                </div>

                <!-- Sidebar Area -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        <?php if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>
                            <?php dynamic_sidebar( 'primary-sidebar' ); ?>
                        <?php else : ?>
                            <!-- Time to add some widgets! -->
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### News Area End ##### -->

<?php get_footer(); ?>