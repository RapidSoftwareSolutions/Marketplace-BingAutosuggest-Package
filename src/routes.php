<?php
$routes = [
    'metadata',
    'getSuggestions'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

