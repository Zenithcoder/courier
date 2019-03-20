<?php
/**
 * Created by PhpStorm.
 * User: nero
 * Date: 3/20/19
 * Time: 9:40 AM
 */

namespace App\Custom\Shared;


class OrderStatus
{
    /**
     * @var int
     */
    private $pending;

    /**
     * @var int
     */
    private $en_route;

    /**
     * @var int
     */
    private $delivered;

    /**
     * @var int
     */
    private $cancelled;


    /**
     * OrderStatus constructor.
     * @param int $pending
     * @param int $en_route
     * @param int $delivered
     * @param int $cancelled
     */
    public function __construct($pending, $en_route = 0, $delivered = 0, $cancelled = 0)
    {
        $this->pending = $pending;
        $this->en_route = $en_route;
        $this->delivered = $delivered;
        $this->cancelled = $cancelled;
    }

    /**
     * @return int
     */
    public function getPending()
    {
        return $this->pending;
    }

    /**
     * @param int $pending
     */
    public function setPending($pending)
    {
        $this->pending = $pending;
    }

    /**
     * @return int
     */
    public function getEnRoute()
    {
        return $this->en_route;
    }

    /**
     * @param int $en_route
     */
    public function setEnRoute($en_route)
    {
        $this->en_route = $en_route;
    }

    /**
     * @return int
     */
    public function getDelivered()
    {
        return $this->delivered;
    }

    /**
     * @param int $delivered
     */
    public function setDelivered($delivered)
    {
        $this->delivered = $delivered;
    }

    /**
     * @return int
     */
    public function getCancelled()
    {
        return $this->cancelled;
    }

    /**
     * @param int $cancelled
     */
    public function setCancelled($cancelled)
    {
        $this->cancelled = $cancelled;
    }
}