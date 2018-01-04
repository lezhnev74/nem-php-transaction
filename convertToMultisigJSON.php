<?php

if ($argc != 6) {
    die("Invalid arguments");
}
$account_publicKey = $argv[1];
$account_privateKey = $argv[2];
$cosignatory1_account_publicKey = $argv[3];
$cosignatory2_account_publicKey = $argv[4];
$cosignatory3_account_publicKey = $argv[5];

$transaction = [
    'transaction' => [
        'timeStamp' => (time() - 1427587585),
        'fee' => 34 * 1000000,
        'type' => 4097,
        'deadline' => (time() - 1427587585 + 43200),
        'version' => -1744830462,
        'signer' => $account_publicKey,
        'modifications' => [ // a list of cosignatories
            [
                'modificationType' => 1,
                'cosignatoryAccount' => $cosignatory1_account_publicKey,
            ],
            [
                'modificationType' => 1,
                'cosignatoryAccount' => $cosignatory2_account_publicKey,
            ],
            [
                'modificationType' => 1,
                'cosignatoryAccount' => $cosignatory3_account_publicKey,
            ],
        ],
        'minCosignatories' => [
            'relativeChange' => 2, // need 2 of 3 signs to commit a transaction
        ],
    ],
    'privateKey' => $account_privateKey,
];

echo json_encode($transaction, JSON_PRETTY_PRINT);