<?php

switch ($paginaAtual) {
    case "home":
        $currentHome = "current";
        $logo = "imagens/minhas_imagens/logo-menu/logo-one.png";
        $logoDark = "imagens/minhas_imagens/logo-menu/logo-dark-one.png";
        $urlBlog = "src/paginas/blog.php";
        $urlContato = "src/paginas/contato.php";
        break;
    case "empresa":
        $currentEmpresa = "current";
        break;
    case "servicos":
        $currentServicos = "current";
        break;
    case "blog":
        $currentBlog = "current";
        $logo = "../../imagens/minhas_imagens/logo-menu/logo-one.png";
        $logoDark = "../../imagens/minhas_imagens/logo-menu/logo-dark-one.png";
        $urlHome = "../../index.php";
        $urlContato = "../src/paginas/contato.php";
        break;
    case "contato":
        $currentContato = "current";
        $logo = "../../imagens/minhas_imagens/logo-menu/logo-one.png";
        $logoDark = "../../imagens/minhas_imagens/logo-menu/logo-dark-one.png";
        $urlHome = "../../index.php";
        $urlBlog = "../src/paginas/blog.php";
        break;
}

?>
<!-- Side Navigation Menu -->
<aside class="side-navigation-wrapper enter-right" data-no-scrollbar data-animation="push-in">
    <div class="side-navigation-scroll-pane">
        <div class="side-navigation-inner">
            <div class="side-navigation-header">
                <div class="navigation-hide side-nav-hide">
                    <a href="#">
                        <span class="icon-cancel medium"></span>
                    </a>
                </div>
            </div>
            <nav class="side-navigation">
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
                        <a href="#<?php echo $urlContato?>>Contato</a>
                    </li>
                </ul>
            </nav>

            <div class="side-navigation-footer">
                <p class="copyright no-margin-bottom">&copy; 2018 STAND BY.</p>
            </div>
        </div>
    </div>
</aside>
<!-- Side Navigation Menu End -->