<?php

namespace CallCenter\CommonBundle\Model;

interface BaseContactInterface
{
    /**
     * Get id.
     *
     * @return int
     */
    public function getId();

    /**
     * Set firstName.
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName($firstName);

    /**
     * Get firstName.
     *
     * @return string
     */
    public function getFirstName();

    /**
     * Set lastName.
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName($lastName);

    /**
     * Get lastName.
     *
     * @return string
     */
    public function getLastName();
}
