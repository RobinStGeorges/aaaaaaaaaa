<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /** @ORM\Column(name="googleplus_id", type="string", length=255, nullable=true) */
    protected $googleplus_id;

    /** @ORM\Column(name="googleplus_access_token", type="string", length=255, nullable=true) */
    protected $googleplus_access_token;

    public function setGoogleplusId($googlePlusId) {
        $this->googleplus_id = $googlePlusId;

        return $this;
    }

    public function getGoogleplusId() {
        return $this->googleplus_id;
    }

    public function setGoogleplusAccessToken($googleplusAccessToken) {
        $this->googleplus_access_token = $googleplusAccessToken;

        return $this;
    }

    public function getGoogleplusAccessToken() {
        return $this->googleplus_access_token;
    }



    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}