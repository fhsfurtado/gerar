
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="<?=$materializejs?>"></script>
        <script type="text/javascript" src="<?=$bootstrapjs?>"></script>
        <script type="text/javascript" src="<?=$stdjs?>"></script>
        <?php
            if(isset($_GET['page'])){
                $arq = 'vendor/dragoncoder/js/'.$_GET['page'].'.js';
                if(file_exists($arq)){
                    echo '<script type="text/javascript" src="vendor/dragoncoder/js/'.$_GET['page'].'.js"></script>';
                }
            }
        ?>