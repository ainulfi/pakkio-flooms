<?php

namespace App\Controllers;

class Secure extends BaseController
{
    public function index(): string
    {
        // In controller
        $encrypter = \Config\Services::encryption();
        // The key should be a 32-byte binary string (not hex)
        $plainText = 'Sensitive Data';
        $ciphertext = $encrypter->encrypt($plainText);

        // The ciphertext is usually base64 encoded by CI4
        echo base64_encode($ciphertext);
    }
}
