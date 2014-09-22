<?php

namespace Ibw\JobeetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserInfo
 *
 * @ORM\Table(name="user_info")
 * @ORM\Entity
 */
class UserInfo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="email", type="integer", nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="adree", type="string", length=255, nullable=false)
     */
    private $adree;


}
