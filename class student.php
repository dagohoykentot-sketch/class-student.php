<?php

class Student {
    private $studentName;
    private $grades = [];

    public function __construct($studentName) {
        $this->studentName = $studentName;
    }

    public function addGrade($grade) {
        if ($grade >= 1 && $grade <= 100) {
            $this->grades[] = $grade;
        } else {
            echo "Invalid grade. Grade must be between 1 and 100.<br>";
        }
    }

    public function calculateAverage() {
        if (count($this->grades) > 0) {
            $total = array_sum($this->grades);
            return $total / count($this->grades);
        } else {
            return 0;
        }
    }

    public function getStatus() {
        $average = $this->calculateAverage();
        if ($average >= 75) {
            return "Passed";
        } else {
            return "Failed";
        }
    }

    public function displayStatus() {
        echo "Student Name: " . $this->studentName . "<br>";
        echo "Average Grade: " . $this->calculateAverage() . "<br>";
        echo "Status: " . $this->getStatus() . "<br>";
        echo "=========================". "<br>";
    }
}

echo "<h1>STUDENT - GRADE</h1>";
$student1 = new student("Prince Aguilar");
$student2 = new student("Princess Aquino");

$student1->addGrade(72);
$student1->addGrade(80);
$student1->addGrade(70);

$student2->addGrade(90);
$student2->addGrade(92);
$student2->addGrade(91);

$student1->displayStatus();
$student2->displayStatus();

?>

