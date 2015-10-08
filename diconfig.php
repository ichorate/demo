<?php
// config.php
return [
    'DbAdapter' => DI\object()
        ->constructor(DI\get('db.host'), DI\get('db.port')),
];