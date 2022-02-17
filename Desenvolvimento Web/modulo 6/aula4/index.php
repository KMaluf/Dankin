<?php

    $a_idade = 0;

function monstrarNome($nome,$idade){
    echo "<h2>Nome é: $nome <h2/>";
    echo " Idade: $idade";
    return $a_idade = $idade;
}




monstrarNome('Cabrituvinho',25);


?>