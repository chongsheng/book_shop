<?php

namespace Admin\ManageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserInfo
 */
class UserInfo
{
    /**
     * @var integer
     */
    private $userId;

    /**
     * @var integer
     */
    private $email;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $adree;


    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set email
     *
     * @param integer $email
     * @return UserInfo
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return integer 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return UserInfo
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
     * Set adree
     *
     * @param string $adree
     * @return UserInfo
     */
    public function setAdree($adree)
    {
        $this->adree = $adree;
    
        return $this;
    }

    /**
     * Get adree
     *
     * @return string 
     */
    public function getAdree()
    {
        return $this->adree;
    }
}
