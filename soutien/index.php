<? php

require('operation.php');

$data = array
    (
    'firstnbr' => 0;
    'secondnbr' => 0;
    'oreration' => "";
    );
$result = 0;

    if (isset ($_POST['firstnbr'])) {
    $data['firstnbr'] = $_POST['firstnbr'];
    }
    
    if (isset ($_POST['secondnbr'])) {
    $data['secondnbr'] = $_POST['secondnbr'];
    }
    
    if (isset ($_POST['operation'])) {
    $data['operation'] = $_POST['operation'];
    }
    
    
    
    
    if ($data["operation"] === "add") {
    $result = add($data['firstnbr'], $data['secondnbr']);
    }
    else if ($data["operation"] === "substract") {
    $result = substract($data['firstnbr'], $data['secondnbr']);
    }
    else if ($data["operation"] === "multiply") {
    $result = multiply($data['firstnbr'], $data['secondnbr']);
    }
    else if ($data["operation"] === "divide") {
    $result = divide($data['firstnbr'], $data['secondnbr']);
    }
    else if ($data["operation"] === "modulo") {
    $result = modulo($data['firstnbr'], $data['secondnbr']);
    }
    
    require('calculator.phtml');
?>