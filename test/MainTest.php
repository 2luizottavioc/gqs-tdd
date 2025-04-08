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

    public function testReverseStringWithEmptyString(): void
    {
        $fnResult = $this->mainClass->reverseString('');
        $this->assertEquals('', $fnResult);
    }

    public function testSumArrayOfIntegers(): void
    {
        $arrayWithNumbers = [1, 2, 3];

        $fnResult = $this->mainClass->sumArrayOfIntegers($arrayWithNumbers);
        $this->assertEquals(6, $fnResult);
    }

    public function testSumArrayOfIntegersWithEmptyArray(): void
    {
        $fnResult = $this->mainClass->sumArrayOfIntegers([]);
        $this->assertEquals(0, $fnResult);
    }

    public function testSumArrayOfIntegersWithNonNumericValues(): void
    {
        $arrayWithNonNumericValues = ['a', 'b', 'c'];
        $fnResult = $this->mainClass->sumArrayOfIntegers($arrayWithNonNumericValues);
        $this->assertEquals(0, $fnResult);
    }

    public function testAverage(): void
    {
        $arrayWithNumbers = [1, 2, 3];

        $fnResult = $this->mainClass->average($arrayWithNumbers);
        $this->assertEquals(2, $fnResult);
    }

    public function testAverageWithEmptyArray(): void
    {
        $fnResult = $this->mainClass->average([]);
        $this->assertEquals(0.0, $fnResult);
    }
}