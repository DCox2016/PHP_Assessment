<?php

class ApplicationWidget
{
    public function showInfo($separator = null) {
        $separator = !empty($separator) ? $separator : ':';
        return __FUNCTION__ . $separator. __LINE__;
    }
}