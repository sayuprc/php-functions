<?php

declare(strict_types=1);

namespace Utility;

class Str
{
    /**
     * 文字列をキャメルケースへ変換する。
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
     * 文字列をスネークケースへ変換する。
     *
     * @param string $str
     *
     * @return string
     */
    public static function toSnake(string $str): string
    {
        return strtolower(preg_replace('/(?<=.)([A-Z])|-/', '_\1', $str));
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
        return strtolower(preg_replace('/(?<=.)([A-Z])|\_/', '-\1', $str));
    }
}
