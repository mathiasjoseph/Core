<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 08/10/16
 * Time: 00:20
 */

namespace Adevis\Component\Core\Model;


trait CommonModelTrait
{
  Use StatusTrait, TimestampableTrait;

    public function updateTimestampable()
    {
        $this->setUpdatedAt(new \DateTime());


    }

    public function persistTimestampable()
    {
        $this->setCreatedAt(new \DateTime());
        $this->setUpdatedAt(new \DateTime());

    }
}