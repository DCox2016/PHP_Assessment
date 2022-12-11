<?php

abstract class Greeter
{
    private $target = 'World';
    abstract protected function sayHello($punctuation,$target);
      
    public function printHello($punctuation){
        echo $this->sayHello($punctuation,$this->target);
    }

    public function getTarget(){
        return $this->target;
    }
} 