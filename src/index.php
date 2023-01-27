<?php
    namespace online\jayroe;
    require "../vendor/autoload.php";

    use Monolog\Level;
    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    class ConsoleHandler{
        private $log;

        /**
         * @return Logger
         */
        public function getLog()
        {
            return $this->log;
        }

        /**
         * @param Logger $log
         */
        public function setLog($log)
        {
            $this->log = $log;
        }



        public function __construct(){

            $this->log = new Logger("ConsoleLogger");
            $this->log->pushHandler(new StreamHandler('php://stdout', Level::Warning));
        }
    }





?>
