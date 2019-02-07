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
 * Validates whether an input is subdivision code of Costa Rica or not.
 *
 * ISO 3166-1 alpha-2: CR
 *
 * @see http://www.geonames.org/CR/administrative-division-costa-rica.html
 *
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
final class CrSubdivisionCode extends AbstractSearcher
{
    private const DATA = [
        'A', // Alajuela
        'C', // Cartago
        'G', // Guanacaste
        'H', // Heredia
        'L', // Limon
        'P', // Puntarenas
        'SJ', // San Jose
    ];
    
    /**
     * {@inheritdoc}
     */
    protected function getDataSource(): array
    {
        return self::DATA;
    }
}
