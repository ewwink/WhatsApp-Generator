<?php
if (strpos($_SERVER['REQUEST_URI'], 'index.php') !== false) {
    $s = $_SERVER;
    $newLocation = $s["REQUEST_SCHEME"] . "://" . $s['HTTP_HOST'] . str_replace('index.php', '', $s['REQUEST_URI']);
    header("Location: " . $newLocation);
    exit(0);
}

$nomor = str_replace('/wa/', '', explode('?', $_SERVER['REQUEST_URI'])[0]);
$text = "";
if(isset($_GET['text'])){
    $text = $_GET['text'];
}
