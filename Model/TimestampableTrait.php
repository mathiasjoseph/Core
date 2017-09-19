<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 18/08/16
 * Time: 19:04
 */

namespace Miky\Component\Core\Model;


trait TimestampableTrait
{
    /**
     * @var \DateTime Creation date
     */
    protected $createdAt = null;

    /**
     * @var \DateTime Update date
     */
    protected $updatedAt = null;


    /**
     * @var \DateTime Sorting date
     */
    protected $sortDate;

    /**
     * @var \DateTime Expiration date
     */
    protected $expiresAt = null;

    /**
     * @var \DateTime Enable date
     */
    protected $enabledAt = null;

    /**
     * @var \DateTime Certification date
     */
    protected $certifiedAt= null;

       /**
        * @var \DateTime Confirmation date
        */
    protected $confirmedAt = null;

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt = null)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;
    }


    /**
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * @param \DateTime $expiresAt
     */
    public function setExpiresAt(\DateTime $expiresAt = null)
    {
        $this->expiresAt = $expiresAt;
    }

    /**
     * @return \DateTime
     */
    public function getEnabledAt()
    {
        return $this->enabledAt;
    }

    /**
     * @param \DateTime $enabledAt
     */
    public function setEnabledAt(\DateTime $enabledAt = null)
    {
        $this->enabledAt = $enabledAt;
    }


    /**
     * @return \DateTime
     */
    public function getCertifiedAt()
    {
        return $this->certifiedAt;
    }

    /**
     * @param \DateTime $certifiedAt
     */
    public function setCertifiedAt(\DateTime $certifiedAt = null)
    {
        $this->certifiedAt = $certifiedAt;
    }

    /**
     * @return \DateTime
     */
    public function getConfirmedAt()
    {
        return $this->confirmedAt;
    }

    /**
     * @param \DateTime $confirmedAt
     */
    public function setConfirmedAt(\DateTime $confirmedAt = null)
    {
        $this->confirmedAt = $confirmedAt;
    }

    /**
     * @return \DateTime
     */
    public function getSortDate()
    {
        return $this->sortDate;
    }

    /**
     * @param \DateTime $sortDate
     */
    public function setSortDate(\DateTime $sortDate = null)
    {
        $this->sortDate = $sortDate;
    }

}