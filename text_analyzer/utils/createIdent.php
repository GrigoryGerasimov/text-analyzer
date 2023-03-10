<?php
declare(strict_types=1);

function createIdent(int $num) {
    $ident = "";
    for ($i = 0; $i < $num; $i++) $ident .= "&nbsp";
    return $ident;
}