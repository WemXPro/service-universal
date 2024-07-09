<?php

namespace App\Services\Universal\Handlers;

use App\Facades\ServiceHandler;
use App\Models\Order;
use App\Models\Payment;

class Cancel extends ServiceHandler
{
    /**
     * This event will be fired once the payment is completed
     */
    public function onPaymentCompleted(Payment $payment)
    {
        $order = Order::findOrFail($payment->order_id);
        $order->cancel($payment->options['cancelled_at'], $payment->options['cancel_reason']);

        return redirect()->back()->with('success', 'Your service was cancelled');
    }

    /**
     * This event will be fired once the payment is completed
     */
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
