<?php
/**
 * Created by PhpStorm.
 * User: grantas
 * Date: 18.3.13
 * Time: 21.43
 */

class Student
{
    private $name;
    private $surname;
    private $group;


    public function __construct($name, $surname, $group)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->group = $group;
    }

    public function shout(){
        echo 'MY NAME IS '.strtoupper($this->name).'!'.PHP_EOL;
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

    public function __destruct()
    {
        echo 'Student '.$this->name.' '.$this->surname.' is destructed.'.PHP_EOL;
    }

    public function __call($name, $arguments)
    {
        echo "Calling inaccessible method '$name' with arguments "
            . implode(', ', $arguments). "\n";
    }

    public static function __callStatic($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "Calling inaccessible static method '$name' with arguments "
            . implode(', ', $arguments). "\n";
    }

    public function __set($name, $value)
    {
        echo "Setting '$name' to '$value'".PHP_EOL;
        $this->$name = $value;
    }

    public function __get($name)
    {
        echo "Getting '$name'".PHP_EOL;
        if(property_exists($this, $name)) {
            if(!is_null($this->$name)) return $this->$name;
            else echo $name." is undefined".PHP_EOL;
        }
        else echo "Student doesn't have a property named '$name'".PHP_EOL;
    }

    public function __isset($name)
    {
        echo "Is '$name' set?".PHP_EOL;
        return isset($this->$name);
    }

    public function __unset($name)
    {
        echo "Unsetting '$name'".PHP_EOL;
        unset($this->$name);
    }

}