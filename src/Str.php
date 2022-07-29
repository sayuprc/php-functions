<?php

declare(strict_types=1);

namespace Utility;

class Str
{
    /**
     * スネークケース、ケバブケースをキャメルケースへ変換する。
     *
     * @param string $str
     *
     * @return string
     */
    public static function toCamel(string $str): string
    {
        return lcfirst(str_replace(' ', '', ucwords(preg_replace('/\_|-/', ' ', $str))));
    }
}
