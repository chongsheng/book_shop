<?php

namespace Ibw\JobeetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
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
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;
    /**
     * 
     * @return type
     */
    public function getUsername(){
        return $this->username;
    }
    /**
     * 
     * @param type $username
     * @return \Ibw\JobeetBundle\Entity\User
     */
    public function setUsername($username){
        $this->username = $username;
        return $this;
    }

    /**
     * 
     * @return type
     */
    public function getPassword(){
        return $this->password;
    }
    /**
     * 
     * @param \Ibw\JobeetBundle\Entity\type $password
     * @return \Ibw\JobeetBundle\Entity\User
     */
    public function setPassword($password){
        $this->password = sha1($password);
        return $this;
    }

    /**
     *@return type
     */
    public function getStatus(){
        return $this->status;
    }
    /**
     * 
     * @param type $status
     * @return \Ibw\JobeetBundle\Entity\User
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }
    public function getId(){
        return $this->id;
    }

}
