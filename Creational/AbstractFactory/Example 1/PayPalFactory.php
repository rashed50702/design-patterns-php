<?php

class PayPalFactory implements PaymentGatewayFactory{
    public function createPaymentProcessor(): PaymentProcessor
    {
        return new PayPalPaymentProcessor();
    }

    public function createPaymentValidator(): PaymentValidator
    {
        return new PayPalPaymentValidator();
    }
}