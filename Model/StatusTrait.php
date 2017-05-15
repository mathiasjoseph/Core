<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 18/08/16
 * Time: 19:04
 */

namespace Miky\Component\Core\Model;

use Doctrine\ORM\Mapping as ORM;

trait StatusTrait
{
    /**
     * @var boolean
     */
    protected $drafted = false;

    /**
     * @var boolean
     */
    protected $enabled = true;

    /**
     * @var boolean
     */
    protected $validated = false;

    /**
     * @var boolean
     */
    protected $confirmed = false;

    /**
     * @var boolean
     */
    protected $pendingValidation = false;

    /**
     * @var boolean
     */
    protected $certified = false;

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
    public function getValidated()
    {
        return $this->validated;
    }

    /**
     * @param boolean $validated
     */
    public function setValidated($validated)
    {
        $this->validated = $validated;
    }

    /**
     * @return boolean
     */
    public function getPendingValidation()
    {
        return $this->pendingValidation;
    }

    /**
     * @param boolean $pendingValidation
     */
    public function setPendingValidation($pendingValidation)
    {
        $this->pendingValidation = $pendingValidation;
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
    public function getCertified()
    {
        return $this->certified;
    }

    /**
     * @param boolean $certified
     */
    public function setCertified($certified)
    {
        $this->certified = $certified;
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