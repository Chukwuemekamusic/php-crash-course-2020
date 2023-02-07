<?php

// Create Person class in Person.php
class Person {
    public string $name;
    public string $surname;
    protected int $age;
    public static $counter = 0;

    public function __construct($name, $surname) {
        $this->name = $name;
        $this->surname = $surname;
        self::$counter++;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    public static function getCounter() {
        return self::$counter;
    }

}