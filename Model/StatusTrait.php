<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 18/08/16
 * Time: 19:04
 */

namespace Miky\Component\Core\Model;

trait StatusTrait
{
    /**
     * @var boolean
     */
    protected $drafted = false;

    /**
     * @var boolean
     */
    protected $enabled;

    /**
     * @var boolean
     */
    protected $confirmed = false;

    /**
     * @return bool
     */
    protected $expired = false;


    /**
     * @return boolean
     */
    public function getDrafted()
    {
        return $this->drafted;
    }

    /**
     * @param boolean $drafted
     */
    public function setDrafted($drafted)
    {
        $this->drafted = $drafted;
    }

    /**
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param boolean $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }


    /**
     * @return boolean
     */
    public function getConfirmed()
    {
        return $this->confirmed;
    }

    /**
     * @param boolean $confirmed
     */
    public function setConfirmed($confirmed)
    {
        $this->confirmed = $confirmed;
    }


    /**
     * @return boolean
     */
    public function getExpired()
    {
        return $this->expired;
    }

    /**
     * @param boolean $expired
     */
    public function setExpired($expired)
    {
        $this->expired = $expired;
    }


}