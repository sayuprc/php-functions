<?php

declare(strict_types=1);

namespace Tests;

use function Functions\flatten;

use PHPUnit\Framework\TestCase;

class FlatTest extends TestCase
{
    /**
     * flat関数のテスト
     * 引数がある場合、再帰的にフラットにする。
     *
     * @return void
     */
    public function testFlat(): void
    {
        $input = [1, 2, 3, 4, 5];
        $expected = [1, 2, 3, 4, 5];
        $actual = flatten($input);
        $this->assertSame($expected, $actual);

        $input = [1, 2, 3, [4, [5]]];
        $expected = [1, 2, 3, 4, [5]];
        $actual = flatten($input);
        $this->assertSame($expected, $actual);

        $input = [1, 2, 3, [4, [5]]];
        $expected = [1, 2, 3, 4, 5];
        $actual = flatten($input, 2);
        $this->assertSame($expected, $actual);

        $input = [1, 2, 3, [4, [5]]];
        $expected = [1, 2, 3, 4, [5]];
        $actual = flatten($input, -2);
        $this->assertSame($expected, $actual);

        $input = [1, 2, 3, [4, [5]]];
        $expected = [1, 2, 3, 4, 5];
        $actual = flatten($input, 10);
        $this->assertSame($expected, $actual);
    }
}
