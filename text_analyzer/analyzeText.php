<?php
declare(strict_types=1);

require("AnalyzerParams.php");
require("utils/replace.php");

function analyzeText(
        string $text,
        string $searchedValue,
        string $charFrom,
        string $charTo,
        string $replacedValue,
        int $charCountToSplit,
        int $charCountForInitSubstr,
        int $charCountForInitReplace
    ): void {
    $text = trim($text);
    $splitted_str = str_split($text, $charCountToSplit);
    $userReplacement = replace($charFrom, $charTo, $text);

    $analyzerScheme = [
        new AnalyzerParams("Text length", fn() => strlen($text)),
        new AnalyzerParams("Position of '$searchedValue' in text", fn() => strpos($text, $searchedValue)),
        new AnalyzerParams("Position of '$searchedValue' in text - case independent", fn() => stripos($text, $searchedValue)),
        new AnalyzerParams("Number of counts of '$searchedValue' in text", fn() => substr_count($text, $searchedValue)),
        new AnalyzerParams("Substring of first $charCountForInitSubstr symbols", fn() => substr($text, 0, $charCountForInitSubstr)),
        new AnalyzerParams("Replacing '$charFrom' with '$charTo'", fn() => $userReplacement[0]),
        new AnalyzerParams("Number of total replacements provided", fn() => $userReplacement[1]),
        new AnalyzerParams("First $charCountForInitReplace symbols replaced for '$replacedValue'", fn() => substr_replace($text, $replacedValue, 0, $charCountForInitReplace)),
        new AnalyzerParams("Getting the very first symbol in text", fn() => str_split($text)[0]),
        new AnalyzerParams("Last sentence $charCountToSplit-char unit", fn() => $splitted_str[count($splitted_str) - 1]),
    ];

    foreach ($analyzerScheme as $param) $param->build();
};