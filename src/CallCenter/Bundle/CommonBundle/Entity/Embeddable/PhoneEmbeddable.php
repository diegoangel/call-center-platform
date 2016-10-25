<?php

namespace CallCenter\Bundle\CommonBundle\Entity\Embeddable;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable
 */
class PhoneEmbeddable
{
    /*
     * @ORM\Column(
     *      name="number",
     *      type="integer"
     * )
     * @Assert\NotBlank()
     */
    private $number;

    /*
     * @ORM\Column(
     *      name="description",
     *      type="string"
     * )
     */
    private $description;
}
