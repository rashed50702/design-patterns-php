<?php

class StripePaymentValidator implements PaymentValidator{
    public function validatePayment($paymentInfo)
    {
        return "Validating payment using Stripe";
    }
}