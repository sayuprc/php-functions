<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

use function Utility\flatten;

class FlatTest extends TestCase
{
    /**
     * flatten関数のテスト
     * 引数がある場合、再帰的にフラットにする。
     *
     * @return void
     */
    public function testFlatten(): void
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

        $input = [1, 2, ['hoge' => [[6, [5], [[[2, [[4, [6, 8]], [8, 9]]], 3], 4], 3], 1], 3], [3, [[4], [5], [7]], [5, 6]]];
        $expected = [1, 2, [6, [5], [[[2, [[4, [6, 8]], [8, 9]]], 3], 4], 3], 1, 3, 3, [4], [5], [7], 5, 6];
        $actual = flatten($input, 2);
        $this->assertSame($expected, $actual);

        $input = [1, 2, ['hoge' => [[6, [5], [[[2, [[4, [6, 8]], [8, 9]]], 3], 4], 3], 1], 3], [3, [[4], [5], [7]], [5, 6]]];
        $expected = [1, 2, 6, 5, [2, [[4, [6, 8]], [8, 9]]], 3, 4, 3, 1, 3, 3, 4, 5, 7, 5, 6];
        $actual = flatten($input, 5);
        $this->assertSame($expected, $actual);

        $input = [1, 2, ['hoge' => [[6, [5], [[[2, [[4, [6, 8]], [8, 9]]], 3], 4], 3], 1], 3], [3, [[4], [5], [7]], [5, 6]]];
        $expected = [1, 2, 6, 5, 2, 4, 6, 8, 8, 9, 3, 4, 3, 1, 3, 3, 4, 5, 7, 5, 6];
        $actual = flatten($input, 40);
        $this->assertSame($expected, $actual);
    }
}
