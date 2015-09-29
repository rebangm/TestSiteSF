<?php

namespace ShareIt\AdminBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="ShareIt\AdminBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var boolean
     * @ORM\Column(name="is_paid_update", type="boolean")
     */
    private $isPaidUpdate = false;

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
     * Set isPaidUpdate
     *
     * @param boolean $isPaidUpdate
     * @return User
     */
    public function setIsPaidUpdate($isPaidUpdate)
    {
        $this->isPaidUpdate = $isPaidUpdate;

        return $this;
    }

    /**
     * Get isPaidUpdate
     *
     * @return boolean 
     */
    public function getIsPaidUpdate()
    {
        return $this->isPaidUpdate;
    }
}
