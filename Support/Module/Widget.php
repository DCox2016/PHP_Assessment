<?php

class SupportBase {
    //
}

class SupportWidget extends SupportBase
{
    public function showInfo($separator = '-'){
        $separator = isset($separator) ? $separator : '|';
        return __CLASS__ . $separator . __LINE__;
    }
}