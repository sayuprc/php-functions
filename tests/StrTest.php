<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Utility\Str;

class StrTest extends TestCase
{
    /**
     * キャメルケースへの変換テスト
     *
     * @return void
     */
    public function testToCamelTest(): void
    {
        $expected = 'hogeFugaPiyo';

        $actual = Str::toCamel('hoge-fuga-piyo');
        $this->assertSame($expected, $actual);

        $actual = Str::toCamel('hoge_fuga_piyo');
        $this->assertSame($expected, $actual);

        $actual = Str::toCamel('HogeFugaPiyo');
        $this->assertSame($expected, $actual);
    }

    /**
     * パスカルケースへの変換テスト
     *
     * @return void
     */
    public function testToPascalTest(): void
    {
        $expected = 'HogeFugaPiyo';

        $actual = Str::toPascal('hoge-fuga-piyo');
        $this->assertSame($expected, $actual);

        $actual = Str::toPascal('hoge_fuga_piyo');
        $this->assertSame($expected, $actual);

        $actual = Str::toPascal('hogeFugaPiyo');
        $this->assertSame($expected, $actual);
    }

    /**
     * スネークケースへの変換テスト
     *
     * @return void
     */
    public function testToSnakeTest(): void
    {
        $expected = 'hoge_fuga_piyo';

        $actual = Str::toSnake('hoge-fuga-piyo');
        $this->assertSame($expected, $actual);

        $actual = Str::toSnake('hogeFugaPiyo');
        $this->assertSame($expected, $actual);

        $actual = Str::toSnake('HogeFugaPiyo');
        $this->assertSame($expected, $actual);
    }
}
