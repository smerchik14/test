<?php 
$image = require __DIR__ . '/image.php';
echo "<img src=\"" . $image . "\"/>";

$jsonString = file_get_contents(__DIR__ . '/counter.json');

$object = json_decode($jsonString);
$object->count += 1;

$jsonString2= json_encode($object);
file_put_contents(__DIR__ . '/counter.json', $jsonString2);

echo "Рисунок обновили " . $object->count . ' раз';
?>
