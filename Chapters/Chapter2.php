<?php
namespace PHPKoans\Chapters;

use PHPKoans\Tests\Chapter as Chapter;

/**
 * Edit the exercises below
 */
class Chapter2 extends Chapter
{
    /**
     * Exercise 2.1
     *
     * INSTRUCTIONS
     * Assume the variables $valueOne and $valueTwo exist as positive integers. Set $sum to the result of adding them both together
     * If $valueOne is 5 and $valueTwo is 6 then $sum should equal 11
     */
    public function addition($valueOne, $valueTwo)
    {
        // CODE HERE

        // DO NOT EDIT BELOW
        return $sum;
    }

    /**
     * Exercise 2.2
     *
     * INSTRUCTIONS
     * Assume the variables $valueOne and $valueTwo exist as positive integers. Set $difference to
     * the result of subtracing $valueTwo from $valueOne.
     * If $valueOne is 20 and $valueTwo is 6, $difference should be 14
     */
    public function subtraction($valueOne, $valueTwo)
    {
        // CODE HERE

        // DO NOT EDIT BELOW
        return $difference;
    }

    /**
     * Exercise 2.3
     *
     * INSTRUCTIONS
     * Assume the variables $valueOne is a positive integer. Set the variable $fourTimes to $valueOne times 4.
     * If $valueOne was 5, $fourTimes should end up being 20
     */
    public function multiplication($valueOne)
    {
        // CODE HERE

        // DO NOT EDIT BELOW
        return $fourTimes;
    }

    // DO NOT EDIT BELOW
    public function __construct()
    {
        $this->number = 2;
        $this->name = 'Math';

        $this->exerciseTests = [
            'addition' => function () {
                if ($this->addition(22, 10) !== 32) {
                    throw new \Exception('$sum is not equal to the sum of $valueOne and $valueTwo');
                }
            },
            'subtraction' => function () {
                if ($this->subtraction(22, 10) !== 12) {
                    throw new \Exception('$difference is not equal to $valueTwo subtracted from $valueOne');
                }
            },
            'multiplication' => function () {
                if ($this->multiplication(6) !== 24) {
                    throw new \Exception('$fourTimes is not equal to $valueOne times 4');
                }
            }
        ];
    }
}