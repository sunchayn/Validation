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
 * Validates whether an input is subdivision code of Comoros or not.
 *
 * ISO 3166-1 alpha-2: KM
 *
 * @see http://www.geonames.org/KM/administrative-division-comoros.html
 *
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
final class KmSubdivisionCode extends AbstractSearcher
{
    private const DATA = [
        'A', // Anjouan
        'G', // Grande Comore
        'M', // Moheli
    ];
    
    /**
     * {@inheritdoc}
     */
    protected function getDataSource(): array
    {
        return self::DATA;
    }
}
