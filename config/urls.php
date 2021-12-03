<?php

date_default_timezone_set ("America/Belem");

$nome_app = "Sistema de Acompanhamento de Pacientes";

$root_url       = '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'];
$context_url    = '/gesta'; // example: logos-ma.com.br/help
$base_url       = $root_url . $context_url;

$index          = "{$base_url}/";
$app            = "{$base_url}/app";
$estrutura      = "{$app}/estrutura";
$view           = "{$app}/view";
//ícones
$icon_main      = "{$base_url}/pics/logo-main.png";

// Constants

//CSS
$stdcss         = "{$base_url}/vendor/dragoncoder/css/style.css";
$materializecss = "{$base_url}/vendor/materialize/css/materialize.min.css";

// JS
$stdjs          = "{$base_url}/vendor/dragoncoder/js/script.js";
$materializejs  = "{$base_url}/vendor/materialize/js/materialize.min.js";
$jquery         = "{$base_url}/vendor/jquery/jquery.min.js";

function redirect($url){
    if( headers_sent() ) {
      echo("<script>location.href='{$url}'</script>");
    } else {
      header("Location: {$url}");
    }
    exit;
  }
  
  function redirectTime($url){
      //header("Location: {$url}");
      echo "<meta http-equiv='refresh' content='1;url={$url}'>";
    exit;
  }