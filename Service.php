<?php

namespace App\Services\Universal;

use App\Models\Order;

class Service
{
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * This function is responsible for creating an instance of the
     * service. This can be anything such as a server, vps or any other instance.
     * @return Renderable
     */
    public function create(array $data = [])
    {
        return [];
    }

    /**
     * This function is responsible for suspending an instance of the
     * service. This method is called when a order is expired or
     * suspended by an admin
     * @return Renderable
    */
    public function suspend(array $data = [])
    {
        return [];
    }

    /**
     * This function is responsible for unsuspending an instance of the
     * service. This method is called when a order is activated or
     * unsuspended by an admin
     * @return Renderable
    */
    public function unsuspend(array $data = [])
    {
        return [];
    }

    /**
     * This function is responsible for deleting an instance of the
     * service. This can be anything such as a server, vps or any other instance.
     * @return Renderable
    */
    public function terminate(array $data = [])
    {
        return [];
    }

}
