<?php

class PayPalPaymentProcessor implements PaymentProcessor
{
    public function processPayment($amount)
    {
        return "Processing payment of $amount using PayPal.";
    }
}