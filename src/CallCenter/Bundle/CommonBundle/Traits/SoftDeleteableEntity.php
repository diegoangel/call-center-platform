<?php

namespace CallCenter\Bundle\CommonBundle\Traits;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait SoftDeleteableEntity
{
    /**
     * @var DateTime
     *
     * @ORM\Column(
     *      name="deleted_at",
     *      type="datetime",
     *      nullable=true
     * )
     */
    protected $deletedAt;

    /**
     * Sets deletedAt.
     *
     * @param Datetime|null $deletedAt
     *
     * @return $this
     */
    public function setDeletedAt(DateTime $deletedAt = null)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Returns deletedAt.
     *
     * @return DateTime
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Is deleted?
     *
     * @return bool
     */
    public function isDeleted()
    {
        return null !== $this->deletedAt;
    }
}
