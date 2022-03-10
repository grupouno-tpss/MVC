<?php
    class View{
        public function __construct()
        {
        }

        public function render ($name, $value) {
            require 'views/'.$name.'.php';
        }

        //$name = nombre del archivo de la carpeta de interfaces

    }
?>