<?php

namespace App\Services\Universal\Handlers;

use App\Facades\ServiceHandler;
use App\Models\Payment;
use App\Models\Order;
use Carbon\Carbon;

class Renewal extends ServiceHandler
{
    /**
     * This event will be fired once the payment is completed
     */
    public function onPaymentCompleted(Payment $payment)
    {
        $payment->order->extend($payment->options['period']);
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
        $order = Order::findOrFail($payment->order_id);
        $order->status = 'cancelled';
        $order->save();
    }
}
