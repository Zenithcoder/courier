<?php
/**
 * Created by PhpStorm.
 * User: nero
 * Date: 3/20/19
 * Time: 9:40 AM
 */

namespace App\Custom\Shared;


class Dashboard
{
    /**
     * @var Order
     */
    private $order;
    private $charts;
    private $users;

    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    function ff() {
        $this->getOrders()->getTotal();
    }












}