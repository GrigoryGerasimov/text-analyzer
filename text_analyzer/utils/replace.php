<?php
declare(strict_types=1);

function replace(string $newVal, string $prevVal, string $text): array {
    $res = str_replace($newVal, $prevVal, $text, $count);
    return [$res, $count];
}