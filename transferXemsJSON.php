<?php

if ($argc != 5) {
    die("Invalid arguments");
}
$account_publicKey = $argv[1];
$account_privateKey = $argv[2];
$target_address = $argv[3];
$amount_microxems = $argv[4];

$transaction = [
    'transaction' => [
        'timeStamp' => (time() - 1427587585),
        'recipient' => $target_address,
        'amount' => (int)$amount_microxems,
        'fee' => 2000000,
        'type' => 257,
        'deadline' => (time() - 1427587585 + 43200),
        'version' => -1744830463,
        'signer' => $account_publicKey,
    ],
    'privateKey' => $account_privateKey,
];

echo json_encode($transaction, JSON_PRETTY_PRINT);