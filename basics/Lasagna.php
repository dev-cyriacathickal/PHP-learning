<?php

declare (strict_types=1);

class Lasagna {

    public function expectedCookTime(): int {
        /**
         * Implement the expectedCookTime method
         * Implement the expectedCookTime function in class Lasagna that does not take any arguments and returns how many minutes the lasagna should be in the oven. According to the cooking book, the expected oven time in minutes is 40:
         */
        return 40;
    }

    public function remainingCookTime(int $elapsed_minutes): int {
        /**
         * Implement the remainingCookTime method
         * Implement the remainingCookTime function in class Lasagna that takes the actual minutes the lasagna has been in the oven as an argument and returns how many minutes the lasagna still has to remain in the oven, based on the expected oven time in minutes from the previous task.
         */
        return $this->expectedCookTime() - $elapsed_minutes;
    }

    public function totalPreparationTime(int $layers_to_prep): int {
        /**
         * Implement the totalPreparationTime method
         * Implement the totalPreparationTime function in class Lasagna that takes the number of layers you added to the lasagna as an argument and returns how many minutes you spent preparing the lasagna, assuming each layer takes you 2 minutes to prepare.
         */
        return $layers_to_prep * 2;
    }

    public function totalElapsedTime(int $layers_to_prep, int $elapsed_minutes):int {
        /**
         * Implement the totalElapsedTime method
         * Implement the totalElapsedTime function in class Lasagna that takes two arguments: the first argument is the number of layers you added to the lasagna, and the second argument is the number of minutes the lasagna has been in the oven. The function should return how many minutes in total you've worked on cooking the lasagna, which is the sum of the preparation time in minutes, and the time in minutes the lasagna has spent in the oven at the moment.
         */
        return $this->totalPreparationTime($layers_to_prep) + $elapsed_minutes;
    }

    public function alarm():string {
        /*
         * Implement the alarm method
         * Implement the alarm function in class Lasagna that does not take any arguments and returns a message indicating that the lasagna is ready to eat.
         */
        return 'Ding!';
    }
}

$timer = new Lasagna();
echo $timer->expectedCookTime(); // => 40
echo $timer->remainingCookTime(30); // => 10
echo $timer->totalPreparationTime(3); // => 6
echo $timer->totalElapsedTime(3, 20); // => 26
echo $timer->alarm(); // => "Ding!"
