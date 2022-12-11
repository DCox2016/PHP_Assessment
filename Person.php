<?php

class Person 
{
    //Properties
    public $firstName;
    public $lastName;
    public $middleName;
  

    function set_name($firstName,$lastName, $middleName = null){
        $this->firstName  = $firstName;
        $this->lastName   = $lastName;
        $this->middleName = $middleName;
    }

    function get_name() {
        return $this->firstName . ' ' . ($this->middleName != null ? $this->middleName . ' ' : '') . $this->lastName;
    }
}

class Employee extends Person
{
    function is_employee($person, $id = null){
        if($id != null){
            return $person->firstName . ' is an Employee.';
        } else {
            return $person->firstName . ' is not an Employee';
        }
    }
}

class Pet 
{
    //Properties
    public $firstName;
    public $middleName;
    public $lastName;

    function set_name($firstName,$middleName = null,$lastName = null){
        $this->firstName  = $firstName;
        $this->middleName = $middleName;
        $this->lastName   = $lastName;
    }

    function get_name(){
        return $this->firstName . ' ' . ($this->middleName != null ? $this->middleName . ' ' : '') . ($this->lastName != null ? $this->lastName : '');
    }
}
?>