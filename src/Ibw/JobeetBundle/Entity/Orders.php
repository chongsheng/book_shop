<?php

namespace Ibw\JobeetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="orders")
 * @ORM\Entity
 */
class Orders
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="good_id", type="integer", nullable=false)
     */
    private $goodId;

    /**
     * @var integer
     *
     * @ORM\Column(name="name", type="integer", nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", nullable=false)
     */
    private $price;

    /**
     * @var float
     *
     * @ORM\Column(name="total_money", type="decimal", nullable=false)
     */
    private $totalMoney;

    /**
     * @var integer
     *
     * @ORM\Column(name="buy_time", type="decimal", nullable=false)
     */
    private $buyTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;
    
    
    /**
     * method of get & set
     */
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
        return $this;
    }
    
    public function getGoodId(){
        return $this->goodId;
    }
    
    public function setGoodId($g_id){
        $this->goodId = $g_id;
        return $this;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function setName($name){
        $this->name = $name;
        return $this;
    }
    
    public function getPrice(){
        return $this->price;
    }
    
    public function setPrice($price){
        $this->price =$price;
        return $this;
    }
    
    public function getTotalMoney(){
        return $this->totalMoney;
    }
    
    public function setTotalMoney($totalmoeny){
        $this->totalMoney = $totalmoeny;
        return $this;
    }
    
    public function getBuyTime(){
        return $this->buyTime;
    }
    public function setBuyTime($buyTitme){
        $this->buyTime = $buyTitme;
        return $this;
    }
    
    public function getStatus(){
        return $this->status;
    }
    
    public function setStatus ($status){
    
        $this->status = $status;
        
        return $this;
    }


    /**
     * @ORM\PrePersist
     */
    public function pre_set_defualt_values()
    {
        $this->setBuyTime(time());
        $this->setStatus(0);
        
    }
}