<?php

require_once('autoload.php');

class PaymentGatewayClient{
    private $factory;

    public function __construct(PaymentGatewayFactory $factory)
    {
        $this->factory = $factory;
    }

    public function processPayment($amount, $paymentInfo)
    {
        $processor = $this->factory->createPaymentProcessor();
        $validator = $this->factory->createPaymentValidator();

        $paymentResult = $processor->processPayment($amount);
        $validationResult = $validator->validatePayment($paymentInfo);

        return "Payment processing result: $paymentResult <br>
            Payment validation result: $validationResult";
    }
}

$paypalFactory = new PayPalFactory();
$client1 = new PaymentGatewayClient($paypalFactory);
echo $client1->processPayment(65555, "F156666");

echo "<br>";

$stripeFactory = new StripeFactory();
$client2 = new PaymentGatewayClient($stripeFactory);
echo $client2->processPayment(85555, "S56666");