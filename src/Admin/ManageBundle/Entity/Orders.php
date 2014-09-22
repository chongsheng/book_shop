<?php

namespace Admin\ManageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 */
class Orders
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $goodId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $price;

    /**
     * @var float
     */
    private $totalMoney;

    /**
     * @var integer
     */
    private $buyTime;

    /**
     * @var integer
     */
    private $status;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set goodId
     *
     * @param integer $goodId
     * @return Orders
     */
    public function setGoodId($goodId)
    {
        $this->goodId = $goodId;
    
        return $this;
    }

    /**
     * Get goodId
     *
     * @return integer 
     */
    public function getGoodId()
    {
        return $this->goodId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Orders
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Orders
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set totalMoney
     *
     * @param float $totalMoney
     * @return Orders
     */
    public function setTotalMoney($totalMoney)
    {
        $this->totalMoney = $totalMoney;
    
        return $this;
    }

    /**
     * Get totalMoney
     *
     * @return float 
     */
    public function getTotalMoney()
    {
        return $this->totalMoney;
    }

    /**
     * Set buyTime
     *
     * @param integer $buyTime
     * @return Orders
     */
    public function setBuyTime($buyTime)
    {
        $this->buyTime = $buyTime;
    
        return $this;
    }

    /**
     * Get buyTime
     *
     * @return integer 
     */
    public function getBuyTime()
    {
        return $this->buyTime;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Orders
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * @ORM\PrePersist
     */
    public function pre_set_defualt_values()
    {
        // Add your code here
    }
}
