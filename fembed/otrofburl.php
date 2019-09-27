<?php
/**
 * @name Link Direct Facebook
 * @author Walter Garcia
 * @copyright 2019
 */

$url = 'https://www.facebook.com/elwaitejavier/videos/vb.100006226571448/2120744014809797';

_Download($url);

function _Download($url) {
    $useragent = 'Mozilla/5.0 (Linux; U; Android 2.3.3; de-de; HTC Desire Build/GRI40) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1';
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $source = curl_exec($ch);
    curl_close($ch);
    
    $download = explode('/video_redirect/?src=', $source);
    $download = explode('&amp', $download[1]);
    $download = rawurldecode($download[0]);
    header('Location: ' . $download);
    exit();
}
?>