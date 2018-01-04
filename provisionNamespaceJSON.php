<?php

if ($argc != 4) {
    die("Invalid arguments");
}
$account_publicKey = $argv[1];
$account_privateKey = $argv[2];
$namespace = $argv[3];

$transaction = [
    'transaction' => [
        'timeStamp' => (time() - 1427587585),
        'fee' => 150000,
        'type' => 8193,
        'deadline' => (time() - 1427587585 + 43200),
        'version' => -1744830463,
        'signer' => $account_publicKey,
        "rentalFeeSink" => "TAMESPACEWH4MKFMBCVFERDPOOP4FK7MTDJEYP35", // for test net only
        "rentalFee" => 100 * 1000000, // 100 XEMs
        "newPart" => $namespace,
        "parent" => null,
    ],
    'privateKey' => $account_privateKey,
];

echo json_encode($transaction, JSON_PRETTY_PRINT);