<?php get_header();?>
<div class="conteudo">
    <main>
        <section class="slide container">Slide</section>
        <section class="servicos container">Serviços</section>
        <section class="meio">
            <div class="container">
                <div class="row">
                    <aside class="barra-lateral col-3">
                        <?php get_sidebar('home'); ?>
                    </aside>
                    <div class="noticias col-9">
                        <div class="row">
                            <?php 
                                $destaque = new WP_Query('post_type=post_per_page=1&cat=4,10');

                                if($destaque->have_posts()):
                                    while($destaque->have_posts()):
                                        $destaque->the_post();
                                ?>
                                <div class="col-12">
                                    <?php get_template_part( 'content', 'destaque' ); ?>
                                </div>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif;                                    
                                ?>
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="mapa container">Mapa</div>
    </main>
</div>
<?php get_footer();?>