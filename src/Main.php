<?php

declare(strict_types=1);

namespace App\Main;

class Main
{
public function reverseString(string $string): string
    {
        return strrev($string);
    }

    public function sumArrayOfIntegers(array $numbers): int
    {
        return array_sum($numbers);
    }

    public function average(array $numbers): float
    {
        if (count($numbers) === 0) {
            return 0.0;
        }

        return array_sum($numbers) / count($numbers);
    }
}