<?php

namespace CallCenter\Bundle\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use CallCenter\Bundle\CommonBundle\Traits\SoftDeleteableEntity;

/**
 * @ORM\MappedSuperclass
 * @Gedmo\SoftDeleteable(
 *      fieldName="deleted_at",
 *      timeAware=false
 * )
 */
abstract class BasePhone
{
    use SoftDeleteableEntity;

    /**
     * @ORM\Id
     * @ORM\Column(
     *      name="id",
     *      type="integer"
     * )
     * @ORM\GeneratedValue(
     *      strategy="IDENTITY"
     * )
     */
    protected $id;

    /**
     * @ORM\ManyToOne(
     *      targetEntity="BaseContact",
     *      inversedBy="phones"
     * )
     * @ORM\JoinColumn(
     *      name="contact_id",
     *      referencedColumnName="id"
     * )
     */
    protected $contact;

    /**
     * @ORM\Embedded(
     *      class="PhoneEmbeddable"
     * )
     */
    protected $phone;
}
