<?php
namespace Htlw3r\Phpoopdemo\Model;

use Htlw3r\Phpoopdemo\Model\AbstractProduct;

class Burger extends AbstractProduct
{
    public float $weight;

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param string $name
     * @param float $weight-
     */
    public function __construct(
        string $cname,
        float $cprice,
        float $cweight)
    {
        parent::__construct($cname, $cprice);
        $this->weight = $cweight;
    }
}
