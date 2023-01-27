<?php
    namespace online\jayroe;
    require "../vendor/autoload.php";

    use Monolog\Level;
    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    $log = new Logger("myLogger");
    $log->pushHandler(new StreamHandler('php://stdout', Level::Warning));

    // add records to the log
    $log->warning('Foo');
    $log->error('Bar');




?>
