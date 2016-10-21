<?php

namespace CallCenter\CommonBundle\Entity;

use Date;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use CallCenter\CommonBundle\Embeddable\Phone as PhoneEmbeddable;

/*
 * @ORM\Entity
 * @Gedmo\SoftDeleteable(
 *      fieldName="deletedAt",
 *      timeAware=false
 * )
 */
class BasePhone
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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

    /*
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $deletedAt;
}
