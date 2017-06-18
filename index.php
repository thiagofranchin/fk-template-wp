<?php get_header();?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<div class="conteudo">
    <main>
        <section class="meio">
        <div class="container">
            <div class="row">
                <div class="noticias col-9">
                    <?php 
                        // Se houver algum post
                        if(have_posts()) :
                            // Enquanto houver algum post, chame o de determinada maneira
                            while (have_posts()) : the_post();                                
                    ?>
                    
                    <?php get_template_part('content', get_post_format()); ?>

                    <?php endwhile; ?>
                    <p>Sem posts</p>
                    <?php endif; ?>
                </div>
                <aside class="barra-lateral col-3">
                    <?php get_sidebar('blog'); ?>
                </aside>
            </div>
        </div>
        </section>
    </main>
</div>
<?php get_footer();?>