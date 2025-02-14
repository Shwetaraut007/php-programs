<?php
    class Student
 {
    private $rollNumber;
    private $studentName;
    private $percentage;

    // Constructor
    function __construct() {}

    // Member function to accept student information
    function accept($rollNumber, $studentName, $percentage)
   {
        $this->rollNumber = $rollNumber;
        $this->studentName = $studentName;
        $this->percentage = $percentage;
    }

    // Member function to display student information
    function display() 
    {
        echo "Student Information:\n";
        echo "Roll Number: " . $this->rollNumber . "\n";
        echo "Student Name: " . $this->studentName . "\n";
        echo "Percentage: " . $this->percentage . "%\n";
    }

    // Member function to check if student has passed (percentage >= 35)
    function hasPassed() 
  {
        if ($this->percentage >= 35) 
       {
            return "Yes";
        } 
      else 
       {
            return "No";
        }
    }

    // Member function to get grade based on percentage
    function getGrade() {
        if ($this->percentage >= 80) 
        {
            return "A";
        } 
     elseif ($this->percentage >= 60 && $this->percentage < 80)
        {
            return "B";
        }
     elseif ($this->percentage >= 50 && $this->percentage < 60) 
         {
            return "C";
         }
     elseif ($this->percentage >= 35 && $this->percentage < 50) 
        {
            return "D";
        } 
      else  
       {
            return "F";
        }
    }
}

// Create an object of Student class
$student = new Student();

// Accept student information
$student->accept(1, "John Doe", 85);

// Display student information
$student->display();

// Check if student has passed
echo "Has Passed: " . $student->hasPassed() . "\n";

// Get grade based on percentage
echo "Grade: " . $student->getGrade() . "\n";
?>
