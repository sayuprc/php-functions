<?php

declare(strict_types=1);

namespace Functions;

/**
 * 配列の要素を指定した深さでフラットにする。
 *
 * @param array<mixed> $array
 * @param int          $depth
 *
 * @return array<mixed>
 */
function flat(array $array, int $depth = 0): array
{
    $result = [];

    foreach ($array as $item) {
        if (is_array($item)) {
            $result = [...$result, ...$item];
        } else {
            $result = [...$result, $item];
        }
    }

    if (1 < $depth) {
        $result = flat($result, $depth - 1);
    }

    return $result;
}
