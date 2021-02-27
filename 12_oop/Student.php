<?php

require_once "Person.php";

class Student extends Person
{
    public string $studentId;

    public function __construct($name, $surname, $studentId)
    {
        $this->studentId = $studentId;
        parent::__construct($name, $surname);
    }

    public function __toString(): string
    {
        return parent::__toString().', Student ID:'.$this->studentId;
    }
}