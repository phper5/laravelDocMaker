<?php
return [
    'apiScanPath'=>app_path()."/Api",
    'docType'=>'json', //json or yaml
    'docPath'=>storage_path('docs')."/doc.json",
    'uri'=>'/api/docs',
    'middleware'=>[],
];
