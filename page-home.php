<?php get_header();?>
<div class="conteudo">
    <main>
        <section class="slide container">Slide</section>
        <section class="servicos container">Serviços</section>
        <section class="meio container">
            <div class="row">
                <aside class="barra-lateral col-3">
                    <?php get_sidebar('home'); ?>
                </aside>
                <div class="noticias col-9">
                   Home Home
                </div>
            </div>
        </section>
        <div class="mapa container">Mapa</div>
    </main>
</div>
<?php get_footer();?>