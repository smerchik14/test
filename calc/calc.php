<?php 

if (empty($_GET)) {
    return 'Ничего не передено';
}

if (empty($_GET['operation'])) {
    return 'Операция не передена';
}

if (empty($_GET['x1']) || empty($_GET['x2'])) {
    return 'Аргументы х1 и х2 не передены';
}

$x1=$_GET['x1'];
$x2=$_GET['x2'];
$operation=$_GET['operation'];

$expression = $x1 . ' ' . $operation . ' ' . $x2 . ' = ';

switch ($operation) {
    case '+':
        $result = $x1 + $x2;
    break; 
    case '-':
        $result = $x1 - $x2;
    break; 
    case '*':
        $result = $x1 * $x2;
    break; 
    case ':':
        $result = $x1 / $x2;
    break; 
    default:
        return 'Операцию невозможно выполнить';    
}

return $expression . $result;
?>