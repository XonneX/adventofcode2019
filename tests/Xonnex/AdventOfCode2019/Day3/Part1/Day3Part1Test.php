<?php
declare(strict_types=1);

namespace XonneX\AdventOfCode2019\Day3\Part1;

use PHPUnit\Framework\TestCase;

class Day3Part1Test extends TestCase
{

    public function testSolveEx1(): void
    {
        $solver = new Day3Part1();
        $res = $solver->solve(<<<EOF
R8,U5,L5,D3
U7,R6,D4,L4
EOF);
        $this->assertEquals('6', $res);
    }

    public function testSolveEx2(): void
    {
        $solver = new Day3Part1();
        $res = $solver->solve(<<<EOF
R75,D30,R83,U83,L12,D49,R71,U7,L72
U62,R66,U55,R34,D71,R55,D58,R83
EOF);
        $this->assertEquals('159', $res);
    }

    public function testSolveEx3(): void
    {
        $solver = new Day3Part1();
        $res = $solver->solve(<<<EOF
R98,U47,R26,D63,R33,U87,L62,D20,R33,U53,R51
U98,R91,D20,R16,D67,R40,U7,R15,U6,R7
EOF);
        $this->assertEquals('135', $res);
    }
}
