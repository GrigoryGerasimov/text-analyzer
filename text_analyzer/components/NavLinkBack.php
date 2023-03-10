<?php declare(strict_types=1) ?>

<?php
function getBackNav(): string {
    [
        "REQUEST_SCHEME" => $REQUEST_SCHEME,
        "HTTP_HOST" => $HTTP_HOST,
        "REQUEST_URI" => $REQUEST_URI
    ] = $_SERVER;

    define("CURRENT_URI", $REQUEST_SCHEME."://".$HTTP_HOST.$REQUEST_URI);

    preg_match('/result.php$/i', CURRENT_URI, $matches, PREG_OFFSET_CAPTURE);

    return substr(CURRENT_URI, 0, $matches[0][1]);
}
?>

<a href="<?php echo getBackNav()?>">Back</a>