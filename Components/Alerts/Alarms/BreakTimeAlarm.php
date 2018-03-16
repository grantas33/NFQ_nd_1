<?php
/**
 * Created by PhpStorm.
 * User: grantas
 * Date: 18.3.16
 * Time: 14.17
 */

namespace Components\Alerts\Alarms;


class BreakTimeAlarm
{
    public function start(){
        echo 'The break has started!'.PHP_EOL;
    }

    public function end(){
        echo 'The break has ended!'.PHP_EOL;
    }
}