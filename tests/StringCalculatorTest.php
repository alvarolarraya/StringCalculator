<?php

declare(strict_types=1);

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function shouldReturn0ToEmptyString()
    {
        //preparacion
        $calculator = new StringCalculator();
        //ejecucion
        $result = $calculator->add("");
        //validacion
        $this->assertEquals(0, $result);
    }
    /**
     * @test
     */
    public function shouldReturnTheNumberIfItComesAlone()
    {
        $calculator = new StringCalculator();

        $result = $calculator->add("4");

        $this->assertEquals(4, $result);
    }
    /**
     * @test
     */
    public function shouldReturnTwoNumbersAdded()
    {
        $calculator = new StringCalculator();

        $result = $calculator->add("1,2");

        $this->assertEquals(3, $result);
    }
    /**
     * @test
     */
    public function shouldReturnAllNumbersAdded()
    {
        $calculator = new StringCalculator();

        $result = $calculator->add("1,2,3,4");

        $this->assertEquals(10, $result);
    }
    /**
     * @test
     */
    public function shouldReturnAllNumbersAddedWithLineBreakAsSeparator()
    {
        $calculator = new StringCalculator();

        $result = $calculator->add("1,2\n3\n4");

        $this->assertEquals(10, $result);
    }
}