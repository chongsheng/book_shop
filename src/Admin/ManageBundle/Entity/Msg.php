<?php

namespace Admin\ManageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Msg
 */
class Msg
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $message;

    /**
     * @var integer
     */
    private $addTime;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $replay;


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
     * Set message
     *
     * @param string $message
     * @return Msg
     */
    public function setMessage($message)
    {
        $this->message = $message;
    
        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     * @return Msg
     */
    public function setAddTime($addTime)
    {
        $this->addTime = $addTime;
    
        return $this;
    }

    /**
     * Get addTime
     *
     * @return integer 
     */
    public function getAddTime()
    {
        return $this->addTime;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Msg
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
     * Set title
     *
     * @param string $title
     * @return Msg
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set replay
     *
     * @param string $replay
     * @return Msg
     */
    public function setReplay($replay)
    {
        $this->replay = $replay;
    
        return $this;
    }

    /**
     * Get replay
     *
     * @return string 
     */
    public function getReplay()
    {
        return $this->replay;
    }
}
