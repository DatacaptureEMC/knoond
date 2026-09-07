<?php
//-------------------------------------------------------------------------------------------------
// Connect parameters for your project
//-------------------------------------------------------------------------------------------------
if (getenv('APPLICATION_ENV')) {
    $env = getenv('APPLICATION_ENV');
} else {
    $env = "testing";
}

if ($env === 'testing') {
    define ('HOST', 'localhost');
} else {
    define ('HOST', 'emcsurvey-p-gw02.erasmusmc.nl');
}

define ('USER', 'knoondu');
define ('PASSWD', 'eoHvvN2Cij2ePadi2bts');
define ('DATABASE', 'knoonddb');

?>