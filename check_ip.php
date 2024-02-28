<?php
require 'vendor/autoload.php';

use GeoIp2\Database\Reader;

$reader = new Reader('/www/wwwroot/yunss.vip/GeoLite2-Country.mmdb');

$ip = $_SERVER['REMOTE_ADDR'];

try {
    $record = $reader->country($ip);
    $countryCode = $record->country->isoCode; 

    if($countryCode === 'CN') {
        echo 'false';
    } else {
        echo 'true';
    }
} catch (Exception $e) {
    echo 'false';
}
?>