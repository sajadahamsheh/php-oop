<?php
class Student {
    public $ID ;
    public $name ;
    public $email ;
    public $mobile_number;

    public function __construct($name, $mobile_number) {
        $this->name = $name;
        $this->mobile_number = $mobile_number; 
      }

    function getName(){
        echo $this->name;
    }

    function getMobile(){
        echo $this->mobile_number;
    }

}


class Teacher extends Student {
    public $salary = 5000;
    public $subjects = ['Arabic', 'English', 'Math', 'Science'];

    function getSalary(){
        echo $this->salary;
    }

    function getSubjects(){
        echo $this->subjects;
    }
}
$studant= new Student ("saja","0790773208");
$studant->getName();
echo "<br>";
$studant->getMobile();
echo "<br>";
$Teacher= new Teacher("DUHA",888888888);
$Teacher->getName();
echo "<br>";
$Teacher->getMobile();

?>