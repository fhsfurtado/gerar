<head>
    <!--Import Google Icon Font-->
        <link rel="shortcut icon" href="<?=$icon_main?>" type="image/ico" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script type="text/javascript" src="<?=$jquery?>"></script>
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="<?=$materializecss?>"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?=$bootstrapcss?>"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?=$stdcss?>"/>
        <link type="text/css" rel="stylesheet" href="<?=$fa_css?>"/>
        <?php
            if(isset($_GET['page'])){
                if($_GET['page']=='agenda'){
                    $fullcalendarjs = "{$base_url}/vendor/fullcalendar/lib/main.min.js";
                    echo '<link type="text/css" rel="stylesheet" href="'.$calendarcss.'"/>';
                }
            }
        ?>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title><?=$nome_app?></title>
    </head>