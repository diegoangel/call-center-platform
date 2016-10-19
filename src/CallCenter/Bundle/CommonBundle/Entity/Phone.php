<?php

namespace CallCenter\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CallCenter\CommonBundle\Embeddable\Phone as PhoneEmbeddable;

class Phone
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Contact", inversedBy="phones")
     * @ORM\JoinColumn(name="contact_id", referencedColumnName="id")
     */
    private $contact;

    /**
     * @Embedded(class = "PhoneEmbeddable")
     */
    private $phones;
}
