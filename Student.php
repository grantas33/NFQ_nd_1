<?php
/**
 * Created by PhpStorm.
 * User: grantas
 * Date: 18.3.13
 * Time: 21.43
 */

class Student
{
    public $name;
    public $surname;
    public $group;

    public function __construct($name, $surname, $group)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->group = $group;
    }

    public function __toString()
    {
        return $this->name.' '.$this->surname.', '.$this->group.PHP_EOL;
    }

    public function __invoke($group)
    {
        $this->group = $group;
        echo "My new group is ".$group."!".PHP_EOL;
    }

    public static function __set_state($an_array)
    {
        $obj = new Student;
        $obj->name = $an_array['name'];
        $obj->surname = $an_array['surname'];
        $obj->group = $an_array['group'];
        return $obj;
    }

    public function __clone(){
        $this->__construct($this->name, $this->surname, $this->group);
    }

}