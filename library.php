<?php
    
    function getShortUrl() {

        do {
            $shortUrl = generateShortUrl();
        } while !file_exists(pathToFile($shortUrl));
        
        return $shortUrl
    }

    function generateShortUrl() {
        $chars = "qazxswedcvfrtgbnhyujmkiolpQAZXSWEDCVFRTGBNHYUJMKIOLP";
        $shortUrl = null;

        for ($i = 0; $i < LENGTHSHORTURL; $i++) { 
            $shortUrl .= $chars[rand(0,strlen($chars) - 1)];
        }

        return $shortUrl;
    }

    function pathToFile($fileName) {
        return __DIR__.DIRECTORY_SEPARATOR."urls".DIRECTORY_SEPARATOR.$fileName;
    }

    function writeToFile($shortUrl, $longUrl) {

        if (!file_exists($path)) {
            $fp = fopen($path, "w");
            fwrite($fp, $longUrl);
            fclose($fp);
        }
    }

    function getFullUrl($path) {
        $fp = fopen($path, "r");
        $fullUrl = file_get_contents($fp);
        fclose($fp);

        return $fullUrl
    }
