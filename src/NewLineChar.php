<?php

declare(strict_types=1);

namespace Utility;

enum NewLineChar
{
    /**
     * Carriage Return
     */
    case CR;

    /**
     * Line Feed
     */
    case LF;

    /**
     * Carriage Return / Line Feed
     */
    case CRLF;

    /**
     * 対応する改行コードを返す。
     *
     * @return string
     */
    public function toString(): string
    {
        return match ($this) {
            NewLineChar::CR => "\r",
            NewLineChar::LF => "\n",
            NewLineChar::CRLF => "\r\n",
        };
    }
}
