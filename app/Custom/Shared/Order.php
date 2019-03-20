<?php
/**
 * Created by PhpStorm.
 * User: nero
 * Date: 3/20/19
 * Time: 9:40 AM
 */

namespace App\Custom\Shared;


class Order
{
    /**
     * @var double
     */
    private $total;
    /**
     * @var double
     */
    private $pending;

    private $users;

    /**
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return float
     */
    public function getPending()
    {
        return $this->pending;
    }







    




}