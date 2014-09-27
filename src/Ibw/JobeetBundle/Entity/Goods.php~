<?php

namespace Ibw\JobeetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Goods
 *
 * @ORM\Table(name="goods")
 * @ORM\Entity
 */
class Goods
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="decimal", nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=false)
     */
    private $img;

    /**
     * @var integer
     *
     * @ORM\Column(name="issell", type="integer", nullable=false)
     */
    private $issell;

    /**
     * @var string
     *
     * @ORM\Column(name="demo", type="string", length=255, nullable=false)
     */
    
    
    private $demo;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    
    private $status;
    /**
     *不设置 set 方法 防止修改产品信息
     */
    public function getId(){
        return $this->id;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function getPrice(){
        return $this->price;
    }
    
    public function getImg(){
        return $this->img;
    }
    
    public function getIssell(){
        return $this->issell;
    }
    
    public function getDemo(){
        return $this->demo;
    }
    
    public function getStatus(){
        return $this->status;
    }


}
