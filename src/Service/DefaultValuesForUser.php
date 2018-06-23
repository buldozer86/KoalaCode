<?php

namespace App\Service;


use App\Entity\User;

class DefaultValuesForUser
{

    /**
     * @var User
    */
    protected $user;

    /**
     * Initial object
    */
    public function __construct()
    {
        $this->user = new User();
    }

    /**
     * getting initial user only with default data( without login, pass...)
     * @return User
    */
    public function getUserWithDefaultData()
    {
        return $this->initDefaultValues();
    }

    /**
    */
    protected function initDefaultValues()
    {
        $dataTime = new \DateTime("now");

        $this->user->setKarma(100);
        $this->user->setCreateDate($dataTime);
        $this->user->setUpdateDate($dataTime);

        return $this->user;
    }
}