<?php

namespace CallCenterBundleCommonBundle\Embeddable;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable
 */
class Phone
{
    /*
     * @ORM\Column(
     *      name="phone_number",
     *      type="integer"
     * )
     */
    private $phoneNumber;

    /*
     * @ORM\Column(
     *      name="description",
     *      type="string"
     * )
     */
    private $description;
}
