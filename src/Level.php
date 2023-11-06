<?php

namespace App;

class Level
{

    public static function calculate(int $experience):int {
    
        return ceil($experience / 1000);

   }
}