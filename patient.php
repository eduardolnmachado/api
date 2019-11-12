<?php 

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    
    $patient = array(array('Nome' => 'Nome do Usuário', 'Idade' => '40', 'Cargo' => 'Nome do cargo', 'Area' => 'TI', 'CPF' => '123.456.789-11'));
    
    echo json_encode($patient);
} else {
    exit;
}

?>