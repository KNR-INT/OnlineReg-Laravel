<?php

return [
    'environment' => env('PAYTM_ENVIRONMENT', 'PROD'),
    'merchant_id' => env('PAYTM_MERCHANT_ID','Nation33136489064698'),
    'merchant_key' => env('PAYTM_MERCHANT_KEY','#jS0vFlQUIvpofYl'),
    'website' => env('PAYTM_WEBSITE','WEBSTAGING'),
    'gateway_url' => 'https://securegw.paytm.in/theia/processTransaction',
    'callback_url' => env('PAYTM_CALLBACK_URL', 'https://your-domain.com/payment/callback'),
];
