<?php


namespace Iconic\Architecture\Payment;


use Iconic\Architecture\Product\ProductInterface;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

interface PaymentServiceInterface
{
    public function __construct(
        PaymentRepositoryInterface $paymentRepository,
        PaymentProviderInterface $paymentProvider,
        EventDispatcherInterface $eventDispatcher
    );

    public function prepare(ProductInterface $product): PaymentInterface;

    public function execute(PaymentInterface $payment): void;

    public function reject(PaymentInterface $payment): void;
}