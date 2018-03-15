<?php
    
    function getShortUrl() {

        do {
            $shortUrl = generateShortUrl();
        } while (file_exists(pathToFile($shortUrl)));

        return $shortUrl;
    }

    function generateShortUrl() {
        $chars = "qazxswedcvfrtgbnhyujmkiolpQAZXSWEDCVFRTGBNHYUJMKIOLP";
        $shortUrl = null;

        for ($i = 0; $i < SHORT_URL_LENGTH; $i++) { 
            $shortUrl .= $chars[rand(0,strlen($chars) - 1)];
        }

        return $shortUrl;
    }

    function pathToFile($fileName) {

        if (!strpos($fileName, '.url')) {
            return __DIR__ . DIRECTORY_SEPARATOR . "urls" . DIRECTORY_SEPARATOR . $fileName . ".url";
        } else {
            return __DIR__ . DIRECTORY_SEPARATOR . "urls" . DIRECTORY_SEPARATOR . $fileName;
        }
    }

    function writeToFile($shortUrl, $longUrl) {
        $path = pathToFile($shortUrl);

        if (!file_exists($path)) {
            $fp = fopen($path, "w");
            fwrite($fp, $longUrl . PHP_EOL);
            fclose($fp);
        }
    }

    function getFullUrl($path) {
        $fullUrl = file_get_contents($path);

        return $fullUrl;
    }

    function getFilesList() {
        $array = [];
        $path = __DIR__ . DIRECTORY_SEPARATOR . "urls" . DIRECTORY_SEPARATOR;

        $list = scandir($path);
        
        foreach ($list as $value) {
            if ($value != "." && $value != "..") {
                $array[$value] = getFullUrl(pathToFile($value));
            }
        }
        
        return $array;
    }

    function countOfFiles() {
        return count(getFilesList());
    }

    function getHost() {
        return $_SERVER['SERVER_NAME'];
    }
