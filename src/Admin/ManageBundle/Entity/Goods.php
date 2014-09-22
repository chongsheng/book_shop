<?php

namespace Admin\ManageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Goods
 */
class Goods
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $img;

    /**
     * @var integer
     */
    private $issell;

    /**
     * @var string
     */
    private $demo;

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
     * Set name
     *
     * @param string $name
     * @return Goods
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
     * @return Goods
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
     * Set img
     *
     * @param string $img
     * @return Goods
     */
    public function setImg($img)
    {
        $this->img = $img;
    
        return $this;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set issell
     *
     * @param integer $issell
     * @return Goods
     */
    public function setIssell($issell)
    {
        $this->issell = $issell;
    
        return $this;
    }

    /**
     * Get issell
     *
     * @return integer 
     */
    public function getIssell()
    {
        return $this->issell;
    }

    /**
     * Set demo
     *
     * @param string $demo
     * @return Goods
     */
    public function setDemo($demo)
    {
        $this->demo = $demo;
    
        return $this;
    }

    /**
     * Get demo
     *
     * @return string 
     */
    public function getDemo()
    {
        return $this->demo;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Goods
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
}
