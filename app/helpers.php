<?php

if (! function_exists('get_cdn_path')) {
    function get_cdn_path($url, $width = 0, $height = 0) {
        $cdn_domain = "http://cdn.quanbka.com";
        $domain = "http://vespadaytour.com";
        return $cdn_domain . "/unsafe/" . $width . "x" . $height . "/" . $domain . $url;
    }
}
