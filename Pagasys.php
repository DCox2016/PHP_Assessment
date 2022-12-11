<?php

class Pagasys
{
    function flying()
    {
        //Let us assume we can get the current elevation
        $currentElevation = 50;
        //check if object is on the ground
        if ($currentElevation == 0) {
            echo "The pegasus is not flying";
            echo "\n";
        } else {
            echo "The pegasus is flying";
            echo "\n";
        }

        //Let assume that we are not flying and want to
        $currentElevation = 0;
        //check if object is on the ground
        if ($currentElevation == 0) {
           echo "The pegasus is grounded";
           echo "\n";
           $wingFlapps = 0;
           while($wingFlapps <= 10){
            $wingFlapps += 1;
           }
           $currentElevation = $wingFlapps;
           echo "The pegasus is flying again";
           echo "\n";
        } else {
            echo "The pegasus is flying";
            echo "\n";
        }
    }
}
