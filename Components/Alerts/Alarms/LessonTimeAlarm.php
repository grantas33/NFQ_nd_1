<?php
/**
 * Created by PhpStorm.
 * User: grantas
 * Date: 18.3.16
 * Time: 13.58
 */

namespace Components\Alerts\Alarms;


class LessonTimeAlarm
{
    public function start(){
        echo 'The lesson has started!'.PHP_EOL;
    }

    public function end(){
        echo 'The lesson has finished!'.PHP_EOL;
    }

}