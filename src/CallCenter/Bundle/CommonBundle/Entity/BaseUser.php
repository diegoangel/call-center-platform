<?php

namespace CallCenter\CommonBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use FOS\UserBundle\Model\User as FOSUser;

/**
 * @ORM\MappedSuperclass
 * @Gedmo\SoftDeleteable(
 *      fieldName="deleted_at",
 *      timeAware=false
 * )
 */
abstract class BaseUser extends FOSUser
{
    /**
     * @ORM\Column(
     *      name="delete_at",
     *      type="datetime",
     *      nullable=true
     * )
     */
    private $deletedAt;
}
