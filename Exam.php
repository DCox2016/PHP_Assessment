<?php

class Exam
{
    static $defaultText = 'unknown';
    protected $score;
    public $place = 'office';
    private $attributes = array();

    function setAttributes(array $attributes) {
        $this->attributes = (array)$attributes;
    }

    function __get($name){
        if(array_key_exists($name, $this->attributes)){
            return $this->attributes[$name];
        } else {
            return static::$defaultText;
        }
    }
}