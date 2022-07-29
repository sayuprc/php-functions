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

    /**
     * 文字列をパスカルケースへ変換する。
     *
     * @param string $str
     *
     * @return string
     */
    public static function toPascal(string $str): string
    {
        return str_replace(' ', '', ucwords(preg_replace('/\_|-/', ' ', $str)));
    }

    /**
     * ケバブケース、キャメルケースをスネークケースへ変換する。
     *
     * @param string $str
     *
     * @return string
     */
    public static function toSnake(string $str): string
    {
        return strtolower(str_replace('-', '_', ltrim(preg_replace('/([A-Z])/', '_\0', $str), '_')));
    }

    /**
     * 文字列をケバブケースへ変換する。
     *
     * @param string $str
     *
     * @return string
     */
    public static function toKebab(string $str): string
    {
        return strtolower(str_replace('_', '-', ltrim(preg_replace('/([A-Z])/', '-\0', $str), '-')));
    }
}
