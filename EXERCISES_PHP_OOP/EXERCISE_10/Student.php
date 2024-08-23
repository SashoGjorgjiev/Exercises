<?php

class Student
{
    public $name;
    public $grades = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addGrade($grade)
    {
        $this->grades[] = $grade;
    }

    public function calculateAverage()
    {
        if (count($this->grades) == 0) {
            return 0;
        }
        return array_sum($this->grades) / count($this->grades);
    }

    public function isPassing()
    {
        return   $this->calculateAverage() >= 70 ? 'Yes the student is passing' : 'No,the student  is not passing';
    }

    public function display()
    {
        return 'Name:' . $this->name . ' ' . 'Average:' . $this->calculateAverage() . ' ' . 'Passing: ' . $this->isPassing() . '<br>';
    }
}

$student = new Student('John');
$student->addGrade(80);
$student->addGrade(90);
$student->addGrade(70);
echo $student->display();

$student2 = new Student("Jane");
$student2->addGrade(40);
$student2->addGrade(20);
echo $student2->display();

$student3 = new Student('Mark');
echo $student3->display();
