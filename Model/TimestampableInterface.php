<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 08/05/17
 * Time: 17:25
 */

namespace Miky\Component\Core\Model;


interface TimestampableInterface
{
    /**
     * @return \DateTime
     */
    public function getCreatedAt();

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt = null);

    /**
     * @return \DateTime
     */
    public function getUpdatedAt();

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt = null);

    /**
     * @return \DateTime
     */
    public function getExpiresAt();

    /**
     * @param \DateTime $expiresAt
     */
    public function setExpiresAt(\DateTime $expiresAt = null);

    /**
     * @return \DateTime
     */
    public function getEnabledAt();

    /**
     * @param \DateTime $enabledAt
     */
    public function setEnabledAt(\DateTime $enabledAt = null);


    /**
     * @return \DateTime
     */
    public function getConfirmedAt();

    /**
     * @param \DateTime $confirmedAt
     */
    public function setConfirmedAt(\DateTime $confirmedAt = null);

    /**
     * @return \DateTime
     */
    public function getSortDate();

    /**
     * @param \DateTime $sortDate
     */
    public function setSortDate(\DateTime $sortDate = null);
}