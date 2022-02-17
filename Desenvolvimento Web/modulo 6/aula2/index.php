<?php

//array single
$arr = ['guilherme','joão'];
$arr = array('guilherme','chave2'=>'joão');

$arr[0]= 'guilerme';
$arr[]= 'joão';

// array multidimensionais

//$arr2 = array(array('guilherme','joão'),array(23,45));

//$arr2[0] = array('chave1'=>'guilherme','joão');

$arr2[0]['chave1'] = 'guilherme';

echo $arr2[0]['chave1'];

?>