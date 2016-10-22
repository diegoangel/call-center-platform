<?php

namespace CallCenter\CommonBundle\Embeddable;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable
 */
class Phone
{
    /*
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
    */
    private $id;

    /*
     * @ORM\Column(name="phone_number", type="integer")
     */
    private $phoneNumber;

    /*
     * @ORM\Column(name="description", type="string")
     */
    private $description;
}
