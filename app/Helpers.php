<?php

use GeoIp2\Database\Reader;

function ftToCm($ft)
{
    return round($ft * 30.48);
}

function kgToLb($kg)
{
    return round(($kg / 0.453592) * 10) / 10;
}

function lbToKg($lb)
{
    return round(($lb * 0.453592) * 10) / 10;
}

function getIP()
{
    $ip = "-";

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    return $ip;
}

function get_location()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    $ip = preg_replace('/\s/', '', $ip);
    $ip = explode(',', $ip);
    $ip = $ip[0];

//    $ip = '2.255.251.229';

    try {
        $file_location = dirname(__DIR__) . "/public/geoip/countries.mmdb";
        $reader = new Reader($file_location);
        $record = $reader->country($ip);
        $reader->close();
        $country_data = $record->raw['country'];
    } catch (GeoIp2\Exception\AddressNotFoundException $e) {
        $country_data = [];
    }

    if (isset($country_data) && !empty($country_data) && isset($country_data['is_in_european_union']) && $country_data['is_in_european_union'] === true) {
        $country_data['location'] = 'eu';
    } else {
        $country_data['location'] = 'us';
    }

    return $country_data;
}


