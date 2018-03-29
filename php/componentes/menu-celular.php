<?php
$currentHome = "";
$currentEmpresa = "";
$currentServicos = "";
$currentBlog = "";
$currentContato = "";

if($paginaAtual === "home") {
    $currentHome = "current";
}

if($paginaAtual === "empresa") {
    $currentEmpresa = "current";
}

if($paginaAtual === "servicos") {
    $currentServicos = "current";
}

if($paginaAtual === "blog") {
    $currentBlog = "current";
}

if($paginaAtual === "contato") {
    $currentContato = "current";
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
                        <a href="../../index.php">Home</a>
                    </li>
                    <li class="<?php echo $currentEmpresa?>">
                        <a href="#">Empresa</a>
                    </li>
                    <li class="<?php echo $currentServicos?>">
                        <a href="#">Produtos e Serviços</a>
                    </li>
                    <li class="<?php echo $currentBlog?>">
                        <a href="../../src/paginas/blog.php">Blog</a>
                    </li>
                    <li class="<?php echo $currentContato?>">
                        <a href="#">Contato</a>
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