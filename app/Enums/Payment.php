<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
* @method static Failed()
 * @method static Paid()
 * @method static Lost()
 * @method static Win()
 */
final class Payment extends Enum
{
    const Failed = 'failed';
    const Paid = 'paid';
    const Lost = 'lost';
    const Win = 'win';
}
