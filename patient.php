<?php 

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $patient = array(array('Nome' => 'Nome do Usu�rio', 'Idade' => '37', 'Cargo' => 'Nome do cargo', 'Area' => 'TI', 'CPF' => '123.456.789-11'));
    
    echo json_encode($patient);
} else {
    exit;
}

?>