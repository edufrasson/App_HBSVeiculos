
<?php
spl_autoload_register(function($class){
    $file = BASEDIR . '/' . $class . '.php';

    if(file_exists($file))
        include $file; 
    else
        echo 'Arquivo não econtrado: ' . $arquivo;
});
