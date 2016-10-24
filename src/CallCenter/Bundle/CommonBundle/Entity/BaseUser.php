<?php

namespace CallCenter\Bundle\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use FOS\UserBundle\Model\User as FOSUser;
use CallCenter\Bundle\CommonBundle\Traits\SoftDeleteableEntity;

/**
 * @ORM\MappedSuperclass
 * @Gedmo\SoftDeleteable(
 *      fieldName="deleted_at",
 *      timeAware=false
 * )
 */
abstract class BaseUser extends FOSUser
{
    use SoftDeleteableEntity;

    /**
     * @ORN\Column(
     *      name="id",
     *      type="integer"
     * )
     * @ORM\Id
     * @ORM\GeneratedValue(
     *      strategy="IDENTITY
     * )
     */
    protected $id;
}
