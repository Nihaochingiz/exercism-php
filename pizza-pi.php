<?php
// https://exercism.org/tracks/php/exercises/pizza-pi/edit

class PizzaPi
{
    public function calculateDoughRequirement($pizzas, $persons)
    {
        $grams = $pizzas * (($persons * 20) + 200);
        return $grams;
    }

    public function calculateSauceRequirement($pizzas, $sauceCanVolume)
    {
         $SAUCE_PER_PIZZA = 125;
         $cansOfSauce = $pizzas * $SAUCE_PER_PIZZA / $sauceCanVolume;
         return $cansOfSauce;
         
    }

    public function calculateCheeseCubeCoverage($cheeseDimension, $thickness, $diameter)
    {
        $PI = 3.14;
        $pizzas = ($cheeseDimension**3) / ($thickness * $PI * $diameter);
        return floor($pizzas);
    }

     public function calculateLeftOverSlices($numberOfPizza, $numberOfFriends)
    {
        $totalSlices = $numberOfPizza * 8;
        return $totalSlices % $numberOfFriends;
    }
}
 
