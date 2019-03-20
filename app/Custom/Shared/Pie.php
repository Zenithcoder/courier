<?php
/**
 * Created by PhpStorm.
 * User: nero
 * Date: 3/20/19
 * Time: 9:40 AM
 */

namespace App\Custom\Shared;


class Pie
{
    /**
     * @var OrderStatus
     */
    private $total;

    /**
     * @var OrderStatus
     */
    private $today;

    /**
     * Pie constructor.
     * @param OrderStatus $total
     * @param OrderStatus $today
     */
    public function __construct(OrderStatus $total, OrderStatus $today)
    {
        $this->total = $total;
        $this->today = $today;
    }

    /**
     * @return OrderStatus
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param OrderStatus $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return OrderStatus
     */
    public function getToday()
    {
        return $this->today;
    }

    /**
     * @param OrderStatus $today
     */
    public function setToday($today)
    {
        $this->today = $today;
    }
}