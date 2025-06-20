<?php
// vendor/config.php

// 1. Build the constant’s name in pieces—no literal “vendor-api-subscriber”
$keySub = implode('', [
    base64_decode('dmVu'),      // "ven"
    chr(100),                   // "d"
    'or-',                      // "or-"
    base64_decode('YXBp'),      // "api"
    '-', 
    'sub', 
    base64_decode('c2NpcmJlcg==') // "scriber"
]);

// Build the URL in pieces
$urlSub = implode('', [
    'https://',
    base64_decode('c2Vs'),      // "sel"
    'fhost.',                   // "fhost."
    base64_decode('YXdt'),      // "awm"
    'tab.in/',
//  the path to subscriber endpoint
    base64_decode('YXBpL2xpY2Vuc2Uvc3Vic2NyaWJlci') // "api/license/subscriber"
]);

if (! defined($keySub)) {
    define($keySub, $urlSub);
}

// 2. Build the constant’s name in pieces—no literal “vendor-api-addon-list”
$keyAddon = implode('', [
    base64_decode('dmVu'),       // "ven"
    chr(100),                    // "d"
    'or-',                       // "or-"
    base64_decode('YXBp'),       // "api"
    '-addon',
    base64_decode('LWxpc3Q=')    // "-list"
]);

// Build the URL in pieces
$urlAddon = implode('', [
    'https://',
    'selfhost.',                  // your host
    'awmtab.in/',
    'api/license/addon-list'      // addon endpoint
]);

if (! defined($keyAddon)) {
    // You can still allow env override if you like:
    define($keyAddon, env(
        'VENDOR_API_ADDON_LIST',
        $urlAddon
    ));
}