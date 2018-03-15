<?php
/**
 * Created by PhpStorm.
 * User: grantas
 * Date: 18.3.15
 * Time: 13.00
 */

namespace Components\Calculations;


class AverageGradeCalc
{
    private $marks;
    private $average;

    public function __construct($marks)
    {
        $this->marks = $marks;
        $this->calculateAverage();
    }

    private function calculateAverage(){
        $sum = 0;
        foreach ($this->marks as $value){
            $sum = $sum+$value;
        }
        $this->average = $sum/count($this->marks);
    }

    public function __sleep()
    {
        return array('marks');
    }

    public function __wakeup()
    {
        $this->calculateAverage();
    }

    public function __debugInfo()
    {
        $marksString = "";
        foreach($this->marks as $value){
            $marksString = $marksString.$value.' ';
        }
        return [
            "Marks in a string" => $marksString,
            "Average" => $this->average
        ];
    }
}