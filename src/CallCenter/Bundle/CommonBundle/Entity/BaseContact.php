<?php

namespace CallCenter\CommonBundle\Entity;

use CallCenter\CommonBundle\Model\Contact;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/*
 * @ORM\MappedSuperclass
 * @Gedmo\SoftDeleteable(
 *      fieldName="deleted_at",
 *      timeAware=false
 * )
 */
abstract class BaseContact extends Contact
{
    /*
     * @ORN\Column(
     *      name="id",
     *      type="integer"
     * )
     * @ORM\Id
     * @ORM\GeneratedValue(
     *      strategy="IDENTITY
     * )
     */
    private $id;

    /*
     * @ORM\Column(
     *      name="first_name",
     *      type="string"
     * )
     */
    private $firstName;

    /*
     * @ORM\Column(
     *      name="last_name",
     *      type="string"
     * )
     */
    private $lastName;

    /*
     * @ORM\Column(
     *      name="phone_id",
     *      type="integer"
     * )
     */
    private $phones;

    /*
     * @ORM\Column(
     *      name="deleted_at",
     *      type="datetime",
     *      nullable=true
     * )
     */
    private $deletedAt;

}
