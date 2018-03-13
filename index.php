<?php
require  __DIR__ . '/vendor/autoload.php';

$student = new Student('John', 'Goate', 'SSU-5/2');
echo $student;
$student('MDA-5/9');
echo $student;
//var_export($student);
//$studentB = new Student('Jarva', 'Javlar', 'BAG-1/01');
$studentB = clone $student;
echo $studentB;
// var_dump($student);