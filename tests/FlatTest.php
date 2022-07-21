<?php

declare(strict_types=1);

namespace Tests;

use function Functions\flat;
use PHPUnit\Framework\TestCase;

class FlatTest extends TestCase
{
    public function testFlat(): void
    {
        $input = [1, 2, 3, 4, 5];
        $expected = [1, 2, 3, 4, 5];
        $actual = flat($input);
        $this->assertSame($expected, $actual);

        $input = [1, 2, 3, [4, [5]]];
        $expected = [1, 2, 3, 4, [5]];
        $actual = flat($input);
        $this->assertSame($expected, $actual);

        $input = [1, 2, 3, [4, [5]]];
        $expected = [1, 2, 3, 4, 5];
        $actual = flat($input, 2);
        $this->assertSame($expected, $actual);

        $input = [1, 2, 3, [4, [5]]];
        $expected = [1, 2, 3, 4, [5]];
        $actual = flat($input, -2);
        $this->assertSame($expected, $actual);

        $input = [1, 2, 3, [4, [5]]];
        $expected = [1, 2, 3, 4, 5];
        $actual = flat($input, 10);
        $this->assertSame($expected, $actual);
    }
}
