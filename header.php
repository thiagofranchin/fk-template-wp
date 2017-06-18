<!DOCTYPE html>
<html lang="pt-br">
  <head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FK Template</title>
    
    <?php wp_head(); ?>
  </head>
  <body <?php body_class()?>>
    <header>
        <div class="barra-topo">
            <div class="container">
                <div class='row'>
                    <div class="redes-sociais col-4">Redes Sociais</div>
                    <div class="pesquisa col-8">Pesquisa</div>
                </div>
            </div>
        </div>
        <div class="area-menu container">
            <div class="container">
                <div class="row">
                    <div class="logo col-3">Logo</div>
                    <div class="menu-principal col-9 text-right">
                        <?php wp_nav_menu(array( 'theme_location' => 'menu_principal' )); ?>
                    </div>
                </div>
            </div>
        </div>
    </header>