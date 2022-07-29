<?php

use \Firebase\JWT\JWT;

function generateSignature($sdkKey, $sdkSecret, $meetingNumber, $role) {
    $iat = time();
    $exp = $iat + 60 * 60 * 2;
    $token_payload = [
        'sdkKey' => $sdkKey,
        'iat' => $iat,
        'exp' => $exp,
        'mn' => $meetingNumber,
        'role' => $role
    ];
    $jwt = JWT::encode($token_payload, $sdkSecret, 'HS256');
    
    return $jwt;
}

echo(generateSignature($_ENV['SDK_KEY'], $_ENV['SDK_SECRET'], 12345678912, 0));