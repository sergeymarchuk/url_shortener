<?php
    function getShortUrl() {
        $chars = "qazxswedcvfrtgbnhyujmkiolpQAZXSWEDCVFRTGBNHYUJMKIOLP";
        $shortUrl = null;

        for ($i = 0; $i < LENGTHSHORTURL; $i++) { 
            $shortUrl .= $chars[rand(0,strlen($chars) - 1)];
        }

        return $shortUrl;
    }
