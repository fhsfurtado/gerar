<!DOCTYPE html>
<?php
    require_once 'config/urls.php';
?>
<html>
    <?php
        require_once "app/estrutura/header.php";
    ?>
    <body>
        <!-- Inicio Menu de Navegação -->
        <?php require_once "app/estrutura/nav.php";?>
        <!-- Fim Menu de Navegação -->
        <!-- É aqui onde a magia inicia-->
        <div id="content">
            teste
            <div class="fixed-action-btn">
                <a class="btn-floating btn-large alt-color">
                    <i class="large material-icons">mode_edit</i>
                </a>
                <ul>
                    <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
                    <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
                    <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
                    <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
                </ul>
            </div>
        </div>
        <!-- É aqui onde a magia termina-->
        <!-- Inicio Rodapé -->
        <?php require_once "app/estrutura/footer.php";?>
        <!-- Fim Rodapé -->
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="<?=$materializejs?>"></script>
        <script type="text/javascript" src="<?=$stdjs?>"></script>
    </body>
</html>