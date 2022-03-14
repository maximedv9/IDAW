<?php
function renderHeaderToHTML($currentStyle)
{

    echo '<!doctype html>
    <html>
    
    <head>
        <title>Portfolio | Maxime</title>
        <link rel="stylesheet" href="', $currentStyle, '.css" type="text/css" media="screen" title="default" charset="utf-8" />
    </head>
    
    <body>
    </body>
    
    </html>';
}
