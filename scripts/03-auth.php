<?php
// Reading from STDIN
$plaintext = trim(fgets(STDIN));
if (empty($plaintext)) {
    echo 'Please provide a valid text to be authenticated.' . PHP_EOL;
    die(1);
}

// Reading key
define('APP_KEY_PATH', '03-auth.key');
if (is_file(APP_KEY_PATH)) {
    $key = trim(file_get_contents(APP_KEY_PATH));
} else {
    $key = sodium_crypto_auth_keygen();
    file_put_contents(APP_KEY_PATH, $key);
}

$mac = sodium_crypto_auth($plaintext, $key);
echo json_encode([
    'message' => $plaintext,
    'auth'    => sodium_bin2hex($mac)
]) . PHP_EOL;
