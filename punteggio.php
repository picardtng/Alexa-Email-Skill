<?php

$nome = $_GET['nome'];


$nome = preg_replace('/punto esclamativo/', '!', trim($nome));
$nome = preg_replace('/punto interrogativo/', '?', trim($nome));
$nome = preg_replace('/virgola/', ',', trim($nome));
$nome = preg_replace('/punto/', '.', trim($nome));
$nome = preg_replace('/due punti/', ':', trim($nome));
$nome = preg_replace('/apri parentesi/', '(', trim($nome));
$nome = preg_replace('/chiudi parentesi/', ')', trim($nome));

/*echo '<pre>';  
           print_r(json_encode($trim));
           echo '</pre>';*/ 
           echo json_encode(array('n'=> $nome));
        
?>           