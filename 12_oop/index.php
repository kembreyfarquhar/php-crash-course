<?php

require_once "Person.php";
require_once "Student.php";

$p = new Person('Katie', 'Embrey');
$p->setAge(29);
echo $p->getAge().'<br>';
echo $p->__toString().'<br>';
$p->iterateVisible();

$p2 = new Person('John', 'Smith');
$p2->setAge(34);

echo $p2->__toString();

echo '<pre>';
var_dump($p2);
echo '</pre>';

echo Person::$counter.'<br>';

$p3 = new Person('jane', 'Doe');
echo $p3->__toString().'<br>';

echo '<pre>';
var_dump($p3);
echo '</pre>';

$p3->setAge(52);
echo $p3->getAge();

echo '<pre>';
var_dump($p3);
echo '</pre>';

echo Person::$counter.'<br>';

$s = new Student('Brad', 'Smith', 'G9993820985');
echo $s->__toString().'<br>';

$s->setAge(18);
echo $s->__toString();

echo '<pre>';
var_dump($s);
echo '</pre>';

