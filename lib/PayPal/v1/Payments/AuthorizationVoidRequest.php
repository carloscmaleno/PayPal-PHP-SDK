<?php

// This class was generated on Mon, 16 Apr 2018 19:30:07 UTC by version 0.1.0-dev+560365 of Braintree SDK Generator
// AuthorizationVoidRequest.php
// @version 0.1.0-dev+560365
// @type request
// @data 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
// DO NOT EDIT

namespace PayPal\v1\Payments;

use BraintreeHttp\HttpRequest;

class AuthorizationVoidRequest extends HttpRequest
{
    function __construct($authorizationId)
    {
        parent::__construct("/v1/payments/authorization/{authorization_id}/void?", "POST");
        
        $this->path = str_replace("{authorization_id}", urlencode($authorizationId), $this->path);
        $this->headers["Content-Type"] = "application/json";
    }

    
    public function paypalRequestId($paypalRequestId)
    {
        $this->headers["PayPal-Request-Id"] = $paypalRequestId;
    }
}
