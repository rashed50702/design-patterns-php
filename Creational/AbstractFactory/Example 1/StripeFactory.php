<?php
class StripeFactory implements PaymentGatewayFactory
{
    public function createPaymentProcessor(): PaymentProcessor
    {
        return new StripePaymentProcessor();
    }

    public function createPaymentValidator(): PaymentValidator
    {
        return new StripePaymentValidator();
    }
}
