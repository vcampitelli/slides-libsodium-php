<?php
// Reading from STDIN
$plaintext = trim(fgets(STDIN));
if (empty($plaintext)) {
    echo 'Please provide a valid text to be encrypted.' . PHP_EOL;
    die(1);
}

// Reading key
define('APP_KEY_PATH', '02-encrypt.key');
if (is_file(APP_KEY_PATH)) {
    $key = trim(file_get_contents(APP_KEY_PATH));
} else {
    $key = sodium_crypto_secretbox_keygen();
    file_put_contents(APP_KEY_PATH, $key);
}

// Generates a nonce
$nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);

// We need to prefix the nonce so the decryption process can retrieve it
echo sodium_bin2hex($nonce . sodium_crypto_secretbox($plaintext, $nonce, $key)) . PHP_EOL;
