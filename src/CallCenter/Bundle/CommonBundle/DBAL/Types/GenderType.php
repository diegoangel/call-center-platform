<?php

namespace CallCenter\CommonBundle\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class GenderType extends AbstractEnumType
{
    const MALE = 'F';
    const FEMALE = 'M';

    protected static $choices = [
        self::MALE => 'Masculino',
        self::FEMALE => 'Femenino',
    ];
}
