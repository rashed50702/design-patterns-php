<?php

interface PaymentGatewayFactory
{
    public function createPaymentProcessor(): PaymentProcessor;
    public function createPaymentValidator(): PaymentValidator;
}
