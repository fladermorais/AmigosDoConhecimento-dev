
<?php
// Adicionando Header
include_once("includes/_header.php");


if (!$_GET){
    include_once('pages/home.php');
} elseif ( isset($_GET['url']) && file_exists("pages/{$_GET['url']}.php")){
    include_once("pages/{$_GET['url']}.php");
} else {
    include_once("pages/404.php");
}

// Adicionando footer
include_once("includes/_footer.php");
?>