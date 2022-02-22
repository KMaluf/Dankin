<?php

    include('interface1.php');


    class Test implements Interface1{

        public function printOnScreem($par){
            echo $par;
        }
        
            
    }

    $test = new Test;

    $test -> printOnScreem('Ola mundo')

    


?>