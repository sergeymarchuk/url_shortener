<?php

    $linksList = getFilesList();

    foreach ($linksList as $key => $value) {
        
?>
<ul>
    <li style="width: 30%; min-width: 350px; margin: auto;">
        <a href="<?= 'http://' . getHost() . '/url_shortener/' . $key ?>"> <?= $value ?></a>
        <svg style="width: 15px; height: 15px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 90 90" enable-background="new 0 0 90 90">
            <path d="M45,0C20.1,0,0,20.1,0,45c0,24.9,20.1,45,45,45s45-20.1,45-45C90,20.1,69.9,0,45,0z M68.3,62.1c1.9,1.9,1.8,5-0.1,6.9    c-0.9,0.9-2.2,1.4-3.4,1.4c-1.3,0-2.6-0.5-3.5-1.5L45,52L28.7,68.9c-1,1-2.2,1.5-3.5,1.5c-1.2,0-2.4-0.5-3.4-1.4    c-1.9-1.9-2-5-0.1-6.9L38.2,45L21.7,27.9c-1.9-1.9-1.8-5,0.1-6.9c1.9-1.9,5-1.8,6.9,0.1L45,38l16.3-16.8c1.9-1.9,5-2,6.9-0.1    c1.9,1.9,2,5,0.1,6.9L51.8,45L68.3,62.1z"/>
        </svg>
    </li>
</ul>

<?php
    }
?>
