<?php

namespace CallCenter\Bundle\CommonBundle\Embeddable;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable
 */
class Phone
{
    /*
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GEneratedValue(strategy="IDENTITY")
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
