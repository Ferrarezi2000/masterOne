<?php

switch ($paginaAtual) {
    case "home":
        $currentHome = "current";
        $logoHome = "imagens/minhas_imagens/logo-menu/logo-one.png";
        $logoHomeDark = "imagens/minhas_imagens/logo-menu/logo-dark-one.png";
        $urlBlog = "src/paginas/blog.php";
        break;
    case "empresa":
        $currentEmpresa = "current";
        break;
    case "servicos":
        $currentServicos = "current";
        break;
    case "blog":
        $currentBlog = "current";
        $logoHome = "../../imagens/minhas_imagens/logo-menu/logo-one.png";
        $logoHomeDark = "../../imagens/minhas_imagens/logo-menu/logo-dark-one.png";
        $urlHome = "../../index.php";
        break;
    case "contato":
        $currentContato = "current";
        break;
}

?>

<!-- Header -->
<header class="header header-fixed header-fixed-on-mobile header-transparent" data-bkg-threshold="100" data-compact-threshold="100">
    <div class="header-inner">
        <div class="row nav-bar">
            <div class="column width-12 nav-bar-inner">
                <div class="logo">
                    <div class="logo-inner">
                        <a href="#"><img src="<?php echo $logoHomeDark?>" alt="Logo" /></a>
                        <a href="#"><img src="<?php echo $logoHome?>" alt="Logo" /></a>
                    </div>
                </div>
                <nav class="navigation nav-block secondary-navigation nav-right">
                    <ul>
                        <li class="aux-navigation hide">
                            <!-- Aux Navigation -->
                            <a href="#" class="navigation-show side-nav-show nav-icon">
                                <span class="icon-menu"></span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav class="navigation nav-block primary-navigation nav-right">
                    <ul>
                        <li class="<?php echo $currentHome?>">
                            <a href="<?php echo $urlHome?>">Home</a>
                        </li>
                        <li class="<?php echo $currentEmpresa?>">
                            <a href="#">Empresa</a>
                        </li>
                        <li class="<?php echo $currentServicos?>">
                            <a href="#">Produtos e Serviços</a>
                        </li>
                        <li class="<?php echo $currentBlog?>">
                            <a href="<?php echo $urlBlog?>">Blog</a>
                        </li>
                        <li class="<?php echo $currentContato?>">
                            <a href="#">Contato</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->
