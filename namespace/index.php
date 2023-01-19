<?php

    // include 'bunga.php';
    // include ( 'Tanaman/bunga.php' );

    // new Bunga;
    // new OOPHP\Tanaman\Bunga();

    require __DIR__.'/RequestInterface.php';
    require __DIR__.'/HTTP/Request.php';
    require __DIR__.'/API/Request.php';

    // use HTTP\Request;
    $request = new HTTP\Request();
    $request->handle();
    echo PHP_EOL;
    
    // use API\Request;
    $request = new API\Request();
    $request->handle();

?>
