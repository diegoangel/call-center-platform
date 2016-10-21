<?php

namespace CallCenter\CommonBundle\Entity;

use CallCenter\CommonBundle\Model\Contact;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/*
 * @ORM\Entity
 */
abstract class BaseContact extends Contact
{
    /*
     * @ORN\Column(name="", type="")
     * @ORM\Id
     * @ORM\GEneratedValue(strategy="IDENTITY)
     */
    private $id;

    /*
     * @ORM\Column(name="first_name", type="string")
     */
    private $firstName;

    /*
     * @ORM\Column(name="last_name", type="string")
     */
    private $lastName;

    /*
     * @ORM\Column(nam"phone_id" type="integer")
     */
    private $phones;

    /*
     * @ORM\Column(name="deleted_at", type="datetime")
     */
    private $deletedAt;

}
