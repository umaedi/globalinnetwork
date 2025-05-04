<?php

use Illuminate\Support\Facades\Request;

if (!function_exists('getHost')) {
    function getHost()
    {
        $host = Request::getHost();
        if($host == '127.0.0.1') {
            return false;
        }else {
            $subdomain = explode('.', $host)[0];
            return $subdomain;
        }
    }
}
