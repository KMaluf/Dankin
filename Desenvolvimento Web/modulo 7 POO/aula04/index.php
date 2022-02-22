<?php
    abstract class test{
        public function func1(){
            echo 'chamando funcao 1';
        }

        abstract function func2();
    }


    class Principal2 {
        public static function outroMetodoEstatico(){
            echo 'outro metodo estatico';
        }
    }


    class Principal extends test{

        public function func2(){
            echo 'estou declarando oficialmente um metodo abstrato';
        }

        public static function metodoestatico(){
            echo ' metodo estatico';
        }

        public function funcao(){
            //Principal::metodoestatico();
            //self::metodoestatico();
            Principal2::outroMetodoEstatico();

        }

    }
    $principal = new Principal;
    $principal-> funcao()



?>