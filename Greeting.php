<?php

require_once './Greeter.php';

class Greeting extends Greeter 
{
    protected function sayHello($punctuation,$target) {
        echo 'Hi, ' . $target . ($punctuation != null ? $punctuation : '!');
    }

}