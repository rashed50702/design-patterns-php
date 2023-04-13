<?php

class PayPalPaymentValidator implements PaymentValidator{
    public function validatePayment($paymentInfo)
    {
        return "Validating payment using PayPal";
    }
}