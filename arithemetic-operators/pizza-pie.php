<?php

class PizzaPi {

    CONST MINIMUM_DOUGH = 200;
    CONST PER_PERSON_DOUGH = 20;
    CONST SAUCE_PER_PIZZA = 125;
    CONST PI = 3.14;
    CONST SLICE_PER_PIZZA = 8;

    /**
     * 
     * @param int $pizzas
     * @param int $persons
     * @return int
     * Lilly is a fan of thin, crispy pizzas with a thinner crust. The dough needed for the middle is a minimum 200g, but every person it serves requires another 20g of dough.

      grams = pizzas * ((persons * 20) + 200)

      Lilly needs a function that:

      Takes the number of pizzas
      The number of persons each pizza will serve
      And returns the dough needed to the nearest gram.
     */
    public function calculateDoughRequirement(int $pizzas, int $persons): int {
        return $pizzas * (($persons * self::PER_PERSON_DOUGH) + self::MINIMUM_DOUGH);
    }

    public function calculateSauceRequirement(int $pizzas, int $sauce_can_vol): int {
        return $pizzas * self::SAUCE_PER_PIZZA / $sauce_can_vol;
    }

    public function calculateCheeseCubeCoverage(int $cheese_dimention, float $thickness, int $diameter): int {
        return ( pow($cheese_dimention, 3)) / ($thickness * self::PI * $diameter);
    }

    public function calculateLeftOverSlices(int $no_of_pizzas, int $no_of_friends): int {
        return ($no_of_pizzas* self::SLICE_PER_PIZZA) % $no_of_friends;
    }
}

$pizza = new PizzaPi();

echo $pizza->calculateDoughRequirement(4, 8) . "\n";

echo $pizza->calculateSauceRequirement(8, 250) . "\n";

echo $pizza->calculateCheeseCubeCoverage(25, 0.5, 30) . "\n";

echo $pizza->calculateLeftOverSlices(4, 3);

