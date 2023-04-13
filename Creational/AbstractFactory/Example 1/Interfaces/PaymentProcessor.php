<?php

interface PaymentProcessor{
    public function processPayment($amount);
}