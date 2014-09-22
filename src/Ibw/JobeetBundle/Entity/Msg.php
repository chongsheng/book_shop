<?php

namespace Ibw\JobeetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Msg
 *
 * @ORM\Table(name="msg")
 * @ORM\Entity
 */
class Msg
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
     * @ORM\Column(name="message", type="string", length=255, nullable=false)
     */
    private $message;

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=false)
     */
    private $addTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;
    
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=true)
     */
    private $title;
    
    /**
     * @var string
     *
     * @ORM\Column(name="replay", type="string", length=255, nullable=true)
     */
    
    private $replay;
    
    
    public function getId(){
        return $this->id;
    }
    public function getMessage(){
        return $this->message;
    }
    
    public function setMessage($msg){
        $this->message = $msg;
        return $this;
    }
    
    public function getAddTime(){
       return $this->addTime;
    }
    
    public function setAddTime($times){
        $this->addTime = $times;
        return $this;
    }
    
    public function setTitle($title){
        $this->title = $title;
        
        return $this;
    }
    
    public function getTitle(){
        return $this->title;
    }
    
    

}
