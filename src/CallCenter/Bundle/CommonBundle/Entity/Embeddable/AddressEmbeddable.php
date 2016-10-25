<?php

namespace CallCenter\Bundle\CommonBundle\Entity\Embeddable;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable
 */
class AddressEmbeddable
{
    /**
     * @ORM\Column(
     *      name="street",
     *      type="string"
     * )
     * @Assert\NotBlank()
     */
    private $street;

    /**
     * @ORM\Column(
     *      name="postal_code",
     *      type="string"
     * )
     */
    private $postalCode;

    /**
      * @ORM\Column(
     *      name="city",
     *      type="string"
     * )
     * @Assert\NotBlank()
     */
    private $city;

    /**
     * @ORM\Column(
     *      name="country"
     *      type="string"
     * )
     * @Assert\NotBlank()
     */
    private $country;
}
