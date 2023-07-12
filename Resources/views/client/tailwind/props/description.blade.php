@props([
    'order' => $order,
    'data' => $order->data,
])

<div class="text-base text-gray-500 dark:text-gray-400 max-w-screen-md">
    @dump($order)
</div>
