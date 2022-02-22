<?php

    namespace Sessao1;
    //use Sessao2\Class2;

    class Class1{
        function __construct()
        {   
            echo 'Classe instanciada';
            echo '<hr/>';
            new \Sessao2\Class2();
        }
    }

?>