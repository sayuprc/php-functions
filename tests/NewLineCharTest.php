<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Utility\NewLineChar;

class NewLineCharTest extends TestCase
{
    /**
     * 改行コードテスト
     *
     * @return void
     */
    public function testNewLineChar(): void
    {
        $this->assertSame("\r", NewLineChar::CR->toString());

        $this->assertSame("\n", NewLineChar::LF->toString());

        $this->assertSame("\r\n", NewLineChar::CRLF->toString());
    }
}
