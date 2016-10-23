<?php

namespace CallCenterBundleCommonBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Fresh\DoctrineEnumBundle\Validator\Constraints as DoctrineAssert;
use CallCenterBundleCommonBundle\DBAL\Types\GenderType;

/*
 * @ORM\MappedSuperclass
 * @Gedmo\SoftDeleteable(
 *      fieldName="deleted_at",
 *      timeAware=false
 * )
 */
abstract class BaseContact
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
    protected $id;

    /*
     * @ORM\Column(
     *      name="first_name",
     *      type="string"
     * )
     */
    protected $firstName;

    /*
     * @ORM\Column(
     *      name="last_name",
     *      type="string"
     * )
     */
    protected $lastName;

    /*
     * @ORM\Column(
     *      name="phone_id",
     *      type="integer"
     * )
     */
    protected $phones;

    /*
     * @ORM\Column(
     *      name="deleted_at",
     *      type="datetime",
     *      nullable=true
     * )
     */
    protected $deletedAt;

}
