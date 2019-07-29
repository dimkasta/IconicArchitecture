<?php


namespace Iconic\Architecture\Payment;


interface PaymentProviderInterface
{
    public function execute(PaymentInterface $payment): PaymentProviderResultInterface;
}