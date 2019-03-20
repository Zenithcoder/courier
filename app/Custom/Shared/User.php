<?php
/**
 * Created by PhpStorm.
 * User: nero
 * Date: 3/20/19
 * Time: 9:40 AM
 */

namespace App\Custom\Shared;


class User
{
    /**
     * @var int
     */
    private $riders;

    /**
     * @var int
     */
    private $customers;

    /**
     * @var int
     */
    private $staff;

    /**
     * User constructor.
     * @param int $riders
     * @param int $customers
     * @param int $staff
     */
    public function __construct($riders = 0, $customers = 0, $staff = 0)
    {
        $this->riders = $riders;
        $this->customers = $customers;
        $this->staff = $staff;
    }

    /**
     * @return int
     */
    public function getRiders()
    {
        return $this->riders;
    }

    /**
     * @param int $riders
     */
    public function setRiders($riders)
    {
        $this->riders = $riders;
    }

    /**
     * @return int
     */
    public function getCustomers()
    {
        return $this->customers;
    }

    /**
     * @param int $customers
     */
    public function setCustomers($customers)
    {
        $this->customers = $customers;
    }

    /**
     * @return int
     */
    public function getStaff()
    {
        return $this->staff;
    }

    /**
     * @param int $staff
     */
    public function setStaff($staff)
    {
        $this->staff = $staff;
    }
}