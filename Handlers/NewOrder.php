<?php

namespace App\Services\Universal\Handlers;

use App\Facades\ServiceHandler;
use App\Models\Order;
use App\Models\Payment;

class NewOrder extends ServiceHandler
{
    /**
     * This event will be fired once the payment is completed
     */
    public function onPaymentCompleted(Payment $payment)
    {
        $order = Order::createOrder($payment);
        $order->service()->create();
    }

    public function onPaymentFailed(Payment $payment)
    {
        //
    }

    public function onPaymentPending(Payment $payment)
    {
        //
    }

    public function onPaymentDeclined(Payment $payment)
    {
        //
    }

    public function onPaymentExpired(Payment $payment)
    {
        //
    }
}
