<?php
/**
 * Created by PhpStorm.
 * User: nero
 * Date: 3/20/19
 * Time: 9:40 AM
 */

namespace App\Custom\Shared;


class Chart
{
    /**
     * @var Pie
     */
    private $pie;

    /**
     * Chart constructor.
     * @param Pie $pie
     */
    public function __construct(Pie $pie)
    {
        $this->pie = $pie;
    }

    /**
     * @return Pie
     */
    public function getPie()
    {
        return $this->pie;
    }

    /**
     * @param Pie $pie
     */
    public function setPie($pie)
    {
        $this->pie = $pie;
    }




}