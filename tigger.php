<?php

class Tigger {

    private static $instancia;

    private function __construct() {
            echo "Building character..." . PHP_EOL;
    }
    public static function getInstance() {
        if (self::$instancia == null){
            self::$instancia = new Tigger();
        }
        return self::$instancia;
    
    }

    public function roar() {
            echo "Grrr!" . PHP_EOL;
    }

}

?>
