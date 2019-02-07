<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Respect\Validation\Rules\Locale;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validates whether an input is subdivision code of Qatar or not.
 *
 * ISO 3166-1 alpha-2: QA
 *
 * @see http://www.geonames.org/QA/administrative-division-qatar.html
 *
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
final class QaSubdivisionCode extends AbstractSearcher
{
    private const DATA = [
        'DA', // Ad Dawhah
        'KH', // Al Khawr wa adh Dhakhīrah
        'MS', // Ash Shamāl
        'RA', // Ar Rayyan
        'SH', // Al-Shahaniya
        'US', // Umm Salal
        'WA', // Al Wakrah
        'ZA', // Az Z a‘āyin
    ];
    
    /**
     * {@inheritdoc}
     */
    protected function getDataSource(): array
    {
        return self::DATA;
    }
}
