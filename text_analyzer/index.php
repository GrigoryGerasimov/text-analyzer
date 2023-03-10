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
        <div class="form-container">
            <form action="result.php" method="POST" class="form">
                <textarea
                    name="text"
                    class="form-txt form-divider"
                    placeholder="Please insert the text to be analyzed here..."
                    value=""
                ></textarea>
                <div class="config">
                    <span>Request Configuration</span>
                    <div class="option">
                        <label for="searchedValue" class="option-label">Search in text</label>
                        <input id="searchedValue" class="option-input animate-appearance" type="text" name="searchedValue" placeholder="String to search in the text..."/>
                    </div>
                    <div class="option">
                        <label for="charFrom" class="option-label">Replace from</label>
                        <input id="charFrom" class="option-input animate-appearance" type="text" name="charFrom" placeholder="Replace symbol..."/>
                    </div>
                    <div class="option">
                        <label for="charTo" class="option-label">Replace with</label>
                        <input id="charTo" class="option-input animate-appearance" type="text" name="charTo" placeholder="Replace with symbol..."/>
                    </div>
                    <div class="option">
                        <label for="replacedValue" class="option-label">Replace substring</label>
                        <input id="replacedValue" class="option-input animate-appearance" type="text" name="replacedValue" placeholder="Replace substring with value..."/>
                    </div>
                    <div class="option">
                        <label for="charCountToSplit" class="option-label">Split by</label>
                        <input id="charCountToSplit" class="option-input animate-appearance" type="number" name="charCountToSplit" placeholder="Number of characters to split text by..."/>
                    </div>
                    <div class="option">
                        <label for="charCountForInitSubstr" class="option-label">First substring</label>
                        <input id="charCountForInitSubstr" class="option-input animate-appearance" type="number" name="charCountForInitSubstr" placeholder="Number of characters to get the first substring..."/>
                    </div>
                    <div class="option">
                        <label for="charCountForInitReplace" class="option-label">Replace first substring</label>
                        <input id="charCountForInitReplace" class="option-input animate-appearance" type="number" name="charCountForInitReplace" placeholder="Number of characters to replace in the first substring..."/>
                    </div>
                </div>
                <button type="submit" class="form-btn form-divider animate-appearance">Send</button>
            </form>
        </div>
    </body>
</html>