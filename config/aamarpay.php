<?php

// return [
//     'store_id' => env('AAMARPAY_STORE_ID',''),
//     'signature_key' => env('AAMARPAY_KEY',''),
//     'sandbox' => env('AAMARPAY_SANDBOX', true),
//     'redirect_url' => [
//         'success' => [
//             'url' => env('AAMARPAY_SUCCESS_URL','') // payment.success
//         ],
//         'cancel' => [
//             'url' => env('AAMARPAY_CANCEL_URL','') // payment/cancel or you can use route also
//         ]
//     ]
// ];


return [
    'store_id' => 'zeroplus',
    'signature_key' => '6188528ca39aac63b1c33f043850a125',
    'sandbox' => false,
    'redirect_url' => [
        'success' => [
            'route' => 'payment.success'
        ],
        'cancel' => [
            'route' => 'payment.cancel'
        ]
    ]
];
