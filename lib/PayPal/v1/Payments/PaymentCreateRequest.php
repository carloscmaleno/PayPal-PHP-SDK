<?php

// This class was generated on Mon, 16 Apr 2018 19:30:07 UTC by version 0.1.0-dev+560365 of Braintree SDK Generator
// PaymentCreateRequest.php
// @version 0.1.0-dev+560365
// @type request
// @data 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
// DO NOT EDIT

namespace PayPal\v1\Payments;

use BraintreeHttp\HttpRequest;

class PaymentCreateRequest extends HttpRequest
{
    function __construct()
    {
        parent::__construct("/v1/payments/payment?", "POST");
        $this->headers["Content-Type"] = "application/json";
    }

    
    public function paypalPartnerAttributionId($paypalPartnerAttributionId)
    {
        $this->headers["PayPal-Partner-Attribution-Id"] = $paypalPartnerAttributionId;
    }
}
