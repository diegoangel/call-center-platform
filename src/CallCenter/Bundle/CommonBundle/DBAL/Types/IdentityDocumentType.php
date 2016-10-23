<?php

namespace CallCenter\Bundle\CommonBundle\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class IdentityDocumentTypeType extends AbstractEnumType
{
    const DNI = 'DNI';
    const LE = 'LE';
    const LC = 'LC';

    protected static $choices = [
        self::DNI => 'Documento Nacional de Identidad',
        self::LE => 'Libreta de Enrolamiento',
        self::LC => 'Licencia de Conducir',
    ];
}
