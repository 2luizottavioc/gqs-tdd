<?php

namespace App\Tests;

use App\Main\Main;
use PHPUnit\Framework\TestCase;

final class MainTest extends TestCase
{
    private Main $mainClass;

    protected function setUp(): void
    {
        $this->mainClass = new Main();
    }

    public function testReverseString(): void
    {
        $helloString = "Hello";
        $inversedHello = "olleH";

        $fnResult = $this->mainClass->reverseString($helloString);
        $this->assertEquals($inversedHello, $fnResult);
    }

    public function testSumArrayOfIntegers(): void
    {
        $arrayWithNumbers = [1, 2, 3];

        $fnResult = $this->mainClass->sumArrayOfIntegers($arrayWithNumbers);
        $this->assertEquals(6, $fnResult);
    }

    public function testAverage(): void
    {
        $arrayWithNumbers = [1, 2, 3];

        $fnResult = $this->mainClass->average($arrayWithNumbers);
        $this->assertEquals(2, $fnResult);
    }
}