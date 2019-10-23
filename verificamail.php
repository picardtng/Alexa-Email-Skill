<?php
function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}


$nome = $_GET['nome'];


$nome = preg_replace('/chiocciola/', '@',  trim($nome));

$secure_check = sanitize_my_email($nome);
if ($secure_check == false) {
    echo json_encode (array('n'=> "sex"));
} else { 

/*echo '<pre>';  
           print_r(json_encode($trim));
           echo '</pre>';*/ 
           echo json_encode(array('n'=> $nome));
}        
?>           