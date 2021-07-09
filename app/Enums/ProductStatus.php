<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static InStock()
 * @method static OutOfStock()
 */
final class ProductStatus extends Enum
{
    const OutOfStock = 'Out Of Stock';
    const InStock = 'in stock';
}
