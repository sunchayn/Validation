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
 * Validates whether an input is subdivision code of Guatemala or not.
 *
 * ISO 3166-1 alpha-2: GT
 *
 * @see http://www.geonames.org/GT/administrative-division-guatemala.html
 *
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
final class GtSubdivisionCode extends AbstractSearcher
{
    private const DATA = [
        'AV', // Alta Verapaz
        'BV', // Baja Verapaz
        'CM', // Chimaltenango
        'CQ', // Chiquimula
        'ES', // Escuintla
        'GU', // Guatemala
        'HU', // Huehuetenango
        'IZ', // Izabal
        'JA', // Jalapa
        'JU', // Jutiapa
        'PE', // El Peten
        'PR', // El Progreso
        'QC', // El Quiche
        'QZ', // Quetzaltenango
        'RE', // Retalhuleu
        'SA', // Sacatepequez
        'SM', // San Marcos
        'SO', // Solola
        'SR', // Santa Rosa
        'SU', // Suchitepequez
        'TO', // Totonicapan
        'ZA', // Zacapa
    ];
    
    /**
     * {@inheritdoc}
     */
    protected function getDataSource(): array
    {
        return self::DATA;
    }
}
