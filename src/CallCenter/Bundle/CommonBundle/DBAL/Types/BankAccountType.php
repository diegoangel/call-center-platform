<?php

namespace CallCenter\Bundle\CommonBundle\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class BankAccountType extends AbstractEnumType
{
    const CAJA_AHORRO = 'CA';
    const CUENTA_CORRIENTE = 'CC';
    const JUDICIALES = 'J';

    protected static $choices = [
        self::CAJA_AHORRO => 'Caja de Ahorro',
        self::CUENTA_CORRIENTE => 'Cuenta Corriente',
        self::JUDICIALES => 'Judiciales',
    ];
}
