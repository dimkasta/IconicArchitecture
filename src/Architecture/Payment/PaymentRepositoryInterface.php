<?php


namespace Iconic\Architecture\Payment;


use Iconic\Architecture\Product\ProductInterface;

interface PaymentRepositoryInterface
{
    public function prepare(ProductInterface $product): PaymentInterface;

    public function execute(PaymentInterface $payment): void;

    public function reject(PaymentInterface $payment): void;
}