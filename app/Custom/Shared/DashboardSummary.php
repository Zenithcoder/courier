<?php
/**
 * Created by PhpStorm.
 * User: nero
 * Date: 3/20/19
 * Time: 9:40 AM
 */

namespace App\Custom\Shared;


class DashboardSummary
{
    /**
     * @var Order
     */
    private $order;

    /**
     * @var Chart
     */
    private $chart;

    /**
     * @var User
     */
    private $user;

    /**
     * Dashboard constructor.
     * @param Order $order
     * @param Chart $chart
     * @param User $user
     */
    public function __construct(Order $order = null, Chart $chart = null, User $user = null)
    {
        $this->order = $order;
        $this->chart = $chart;
        $this->user = $user;
    }

    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param Order $order
     */
    public function setOrder(Order $order)
    {
        $this->order = $order;
    }

    /**
     * @return Chart
     */
    public function getChart()
    {
        return $this->chart;
    }

    /**
     * @param Chart $chart
     */
    public function setChart(Chart $chart)
    {
        $this->chart = $chart;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }
}