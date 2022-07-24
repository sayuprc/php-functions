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
function flatten(array $array, int $depth = 1): array
{
    $result = [];

    foreach ($array as $item) {
        if (is_array($item)) {
            if (1 < $depth) {
                // 深さが指定されていて、配列がある場合、再帰的に処理する。
                $result = [...$result, ...flatten($item, $depth - 1)];
            } else {
                $result = [...$result, ...$item];
            }
        } else {
            $result = [...$result, $item];
        }
    }

    return $result;
}
