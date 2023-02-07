<?php

require_once('Person.php');

class Student extends Person {
    public string $student_id;
    public function __construct($name, $surname, $student_id) {
        parent::__construct($name, $surname);
        $this->student_id = $student_id;
        #$this->age = 18;
    }
}