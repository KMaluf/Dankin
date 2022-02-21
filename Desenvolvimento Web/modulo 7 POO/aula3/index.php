<?php

    class Filha{
       
        /*protected function funcaoTeste(){
            echo 'Chamando funcao test';
        }*/

        private function funcaoTeste(){
            echo 'Chamando funcao test';
        }
       
        public function mostrarOla(){
            echo 'Ola Mundo';
            echo '<br/>';
            $this->funcaoTeste();
        }
    }

    class Pai extends Filha{
        public function mostrarTchau(){
            echo 'Tchau Mundo!';
            echo '<br/>';
            //$this->funcaoTeste();
        }
    }

   // $pai = new Pai;
   // $pai -> mostrarTchau();

    $pai = new Pai;
    $pai->mostrarOla()

   //$pai->mostrarTchau();

?>