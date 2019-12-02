<?php

namespace XonneX\AdventOfCode2019\Day2\Part1;

use PHPUnit\Framework\TestCase;

class Day2Part1Test extends TestCase
{

    public function testSolveEx1(): void
    {
        $solver = new Day2Part1(true);
        $res = $solver->solve('1,9,10,3,2,3,11,0,99,30,40,50');
        $this->assertEquals('3500,9,10,70,2,3,11,0,99,30,40,50', $res);
    }

    public function testSolveEx2(): void
    {
        $solver = new Day2Part1(true);
        $res = $solver->solve('1,0,0,0,99');
        $this->assertEquals('2,0,0,0,99', $res);
    }

    public function testSolveEx3(): void
    {
        $solver = new Day2Part1(true);
        $res = $solver->solve('2,3,0,3,99');
        $this->assertEquals('2,3,0,6,99', $res);
    }

    public function testSolveEx4(): void
    {
        $solver = new Day2Part1(true);
        $res = $solver->solve('2,4,4,5,99,0');
        $this->assertEquals('2,4,4,5,99,9801', $res);
    }

    public function testSolveEx5(): void
    {
        $solver = new Day2Part1(true);
        $res = $solver->solve('1,1,1,4,99,5,6,0,99');
        $this->assertEquals('30,1,1,4,2,5,6,0,99', $res);
    }
}
