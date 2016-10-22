<?php

namespace CallCenter\CommonBundle\Entity;

use Date;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use CallCenter\CommonBundle\Embeddable\Phone as PhoneEmbeddable;

/**
 * @ORM\MappedSuperclass
 * @Gedmo\SoftDeleteable(
 *      fieldName="deleted_at",
 *      timeAware=false
 * )
 */
abstract class BasePhone
{
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
    private $id;

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
    private $contact;

    /**
     * @Embedded(
     *      class=PhoneEmbeddable"
     * )
     */
    private $phone;

    /**
     * @ORM\Column(
     *      name="delete_at",
     *      type="datetime",
     *      nullable=true
     * )
     */
    private $deletedAt;
}
