<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static Paid()
 * @method static Failed()
 */
final class Payment extends Enum
{
    const Paid = 'paid';
    const Failed = 'failed';
}
