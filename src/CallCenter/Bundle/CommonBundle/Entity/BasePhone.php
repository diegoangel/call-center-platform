<?php

namespace CallCenterBundleCommonBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use CallCenterBundleCommonBundle\Embeddable\Phone as PhoneEmbeddable;

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
     * @Embedded(
     *      class=PhoneEmbeddable"
     * )
     */
    protected $phone;

    /**
     * @ORM\Column(
     *      name="delete_at",
     *      type="datetime",
     *      nullable=true
     * )
     */
    protected $deletedAt;
}
