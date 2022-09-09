<?php

    $url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

    switch($url){
        case '/':
            include 'views/dash.php';
            break;
        case '/novochamado':
            include 'views/novochamado.php';
            break;
        case '/cadastro':
            include 'processing/processarnovochamado.php';
            break;
        case '/abertos':
            include 'views/chamadosabertos.php';
            break;
        case '/editar':
            include 'views/editarchamado.php';
            break;
        default:
            echo "404";       
    }