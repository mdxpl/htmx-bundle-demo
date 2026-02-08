<?php

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if ($uri !== '/' && is_file($_SERVER['DOCUMENT_ROOT'].$uri)) {
    return false;
}

require $_SERVER['DOCUMENT_ROOT'].'/index.php';