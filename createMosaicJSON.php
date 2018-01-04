<?php

if ($argc != 8) {
    die("Invalid arguments");
}
$account_publicKey = $argv[1];
$account_privateKey = $argv[2];
$namespace = $argv[3];
$name = $argv[4];
$description = $argv[5];
$divisibility = $argv[6];
$initialSupply = $argv[7];

$transaction = [
    'transaction' => [
        'timeStamp' => (time() - 1427587585),
        'fee' => 150000,
        'type' => 16385,
        'deadline' => (time() - 1427587585 + 43200),
        'version' => -1744830463,
        'signer' => $account_publicKey,
        "creationFee" => 10 * 1000000, // 10 XEMs
        "creationFeeSink" => 'TBMOSAICOD4F54EE5CDMR23CCBGOAM2XSJBR5OLC',
        "mosaicDefinition" => [
            "creator" => $account_publicKey,
            "description" => $description,
            "id" => [
                "namespaceId" => $namespace,
                "name" => $name,
            ],
            "properties" => [
                [
                    "name" => "divisibility",
                    "value" => (string)$divisibility,
                ],
                [
                    "name" => "initialSupply",
                    "value" => (string)$initialSupply,
                ],
                [
                    "name" => "supplyMutable",
                    "value" => "true",
                ],
                [
                    "name" => "transferable",
                    "value" => "true",
                ],
            ],
        ],
    ],
    'privateKey' => $account_privateKey,
];

echo json_encode($transaction, JSON_PRETTY_PRINT);