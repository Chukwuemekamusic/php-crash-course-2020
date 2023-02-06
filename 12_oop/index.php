<?php

require_once('Person.php');
require_once('Student.php');

// Create instance of Person
$p1 = new Person('Chidi', 'Mokeme');
$p1->setAge(30);
print_r($p1);
echo '<br>';
echo '<pre>';
var_dump($p1);
echo '</pre>';

// Create instance of Student
$s1 = new Student('Andrew', 'Tate', 'S001');
$s1->setAge(25);
print_r($s1);
echo '<br>';
print_r($s1->getAge());


// class property called
echo Person::$counter;
// Using setter and getter