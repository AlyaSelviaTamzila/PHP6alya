<html>
    <head>
        <titte>Cek Dukungan Cookie</title>
    </head>
    <body>
    <?php
    if (!isset($_GET['g']) && $_GET['q'] == 1){
        if (!isset($_COOKIE['teat'])){
            echo 'support';
        } else {
            echo 'tidak support';
        }

    }else {
        setcookie ('teat', 'value');
        $self = $_SERVER ['PHP_SELF'];
        // Redireksi ke current script
        header ('Location: ' .$self . '?q=1');
        exit;
    }?>
    <p>
    Tekan Refresh (F5);
    </body>
</html>