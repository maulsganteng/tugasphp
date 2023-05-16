<?php
class Student
{
    public $name;
    public $age;
    
    function student()
    {
        echo "nama saya jhon ";
    }
    function student1()
    {
        echo "umur saya 20";
    }
}
$person = new Student();
$person->student1();

?>