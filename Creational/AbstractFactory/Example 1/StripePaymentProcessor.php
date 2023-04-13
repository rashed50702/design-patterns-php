<?php

class StripePaymentProcessor implements PaymentProcessor
{
    public function processPayment($amount)
    {
        return "Processing payment of $amount using Stripe.";
    }
}