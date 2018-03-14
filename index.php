<?php
require  __DIR__ . '/vendor/autoload.php';

echo PHP_EOL.'-----__construct-----'.PHP_EOL;
$student = new Student('John', 'Goate', 'SSU-5/2');
echo $student;

echo PHP_EOL.'-----__invoke-----'.PHP_EOL;
$student('MDA-5/9');
echo $student;

echo PHP_EOL.'-----__set_state-----'.PHP_EOL;
var_export($student);
echo PHP_EOL;

echo PHP_EOL.'-----__clone, __destruct-----'.PHP_EOL;
$studentB = new Student('Jarva', 'Javlar', 'BAG-1/01');
$studentB = clone $student;
echo $studentB;

echo PHP_EOL.'-----__call-----'.PHP_EOL;
$studentB->testFakeMethod('syrum', 5);

echo PHP_EOL.'-----__callStatic-----'.PHP_EOL;
$studentB::testFakeStaticMethod(10, 200);

echo PHP_EOL.'-----__set, __get-----'.PHP_EOL;
$studentB->name = 'Kafau';
$studentB->surname = 'Moses';
echo $studentB->name.PHP_EOL;
echo $studentB->surname.PHP_EOL;
echo $studentB->something;

echo PHP_EOL.'-----__isset, __unset-----'.PHP_EOL;
var_dump(isset($studentB->group));
unset($studentB->group);
var_dump(isset($studentB->group));
echo $studentB->group;


// var_dump($student);