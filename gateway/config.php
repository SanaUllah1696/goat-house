<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51M1ltVJvKQa17EuVcMBej4CVUJcsnrHDe5tx9yuntlCPeiXztnVavVkikQdG9yEilwez9sffSXMi0U1hoE2FYzBV00HinC2kBG";

$secretKey="sk_test_51M1ltVJvKQa17EuVafEehINvEI0fehlQrRkclujD9rgz98ETvh8siOnvdvfcmWGQ7kIo3vkBZCsKSf2MPygCZVjI00YUU1JQsd";

\Stripe\Stripe::setApiKey($secretKey);
?>