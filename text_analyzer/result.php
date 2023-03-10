<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
        <meta name="keywords" content="php, app, string, text, analyzer"/>
        <meta name="description" content="PHP app - Text Analyzer"/>
        <link href="index.css" rel="stylesheet">
        <title>Text Analyzer</title>
    </head>
    <body>
        <div class="output">
            <?php
            require("analyzeText.php");
            require("utils/defaultConstants.php");

            if (!empty($_POST)) {
                [
                    "text" => $text,
                    "searchedValue" => $searchedValue,
                    "charFrom" => $charFrom,
                    "charTo" => $charTo,
                    "replacedValue" => $replacedValue,
                    "charCountToSplit" => $charCountToSplit,
                    "charCountForInitSubstr" => $charCountForInitSubstr,
                    "charCountForInitReplace" => $charCountForInitReplace
                ] = $_POST;
                
                analyzeText(
                    $text === "" ? INIT_TEXT : $text,
                    $searchedValue === "" ? DEFAULT_SEARCHED_VALUE : $searchedValue,
                    $charFrom === "" ? DEFAULT_CHAR_FROM : $charFrom,
                    $charTo === "" ? DEFAULT_CHAR_TO : $charTo,
                    $replacedValue === "" ? DEFAULT_REPLACED_VALUE : $replacedValue,
                    intval($charCountToSplit) === 0 ? DEFAULT_CHAR_COUNT : intval($charCountToSplit),
                    intval($charCountForInitSubstr) === 0 ? DEFAULT_CHAR_COUNT : intval($charCountForInitSubstr),
                    intval($charCountForInitReplace) === 0 ? DEFAULT_CHAR_COUNT : intval($charCountForInitReplace)
                );
            }
            ?>
        </div>
        <div class="navlink animate-appearance">
            <?php
            include("components/NavLinkBack.php");
            ?>
        </div>
    </body>
</html>