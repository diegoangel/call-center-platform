<?php

namespace CallCenterBundleCommonBundle\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class BankAccountType extends AbstractEnumType
{
    const POINT_GUARD    = 'PG';
    const SHOOTING_GUARD = 'SG';
    const SMALL_FORWARD  = 'SF';
    const POWER_FORWARD  = 'PF';
    const CENTER         = 'C';

    protected static $choices = [
        self::POINT_GUARD    => 'Point Guard',
        self::SHOOTING_GUARD => 'Shooting Guard',
        self::SMALL_FORWARD  => 'Small Forward',
        self::POWER_FORWARD  => 'Power Forward',
        self::CENTER         => 'Center'
    ];
}
