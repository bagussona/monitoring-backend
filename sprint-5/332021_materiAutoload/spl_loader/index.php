<?php
spl_autoload_register(function ($Bebek){
    $file = 'load_control/'.$Bebek.'.php';
    if (is_readable($file)){
    include $file;
    }
});

spl_autoload_register(function ($Kucing){
    $file = 'load_fungsi/'.$Kucing.'.php';
    if (is_readable($file)){
    include $file;
    }
});


$foo = new Bebek();
echo $foo->getJmlKaki();
$fr = new Kucing();
echo $fr->getJmlKaki();