<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$request = Illuminate\Http\Request::create('/login', 'POST', [
    'username' => '1',
    'password' => 'siswa123',
    '_token' => 'dummy_token' // We won't have a valid token here...
]);
// Actually, doing this requires matching a valid session token. It's better to just write a simple browser test using dusk or just standard Laravel HTTP tests.
