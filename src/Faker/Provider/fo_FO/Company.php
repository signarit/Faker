<?php

namespace Faker\Provider\fo_FO;

class Company extends \Faker\Provider\Company
{
    /**
     * @var array Danish company name formats.
     */
    protected static $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{firstname}} {{lastName}} {{companySuffix}}',
        '{{lastName}} og {{lastName}} {{companySuffix}}',
        '{{lastName}} & {{lastName}} {{companySuffix}}'
    ];

    /**
     * @var array Company suffixes.
     * @see https://www.taks.fo/en/business/vinnuskrain/different-kinds-of-businesses
     */
    protected static $companySuffix = ['Sp/f', 'P/F', 'ÍVF', 'Fa.'];

    /**
     * @var string v-tal number format.
     * @see https://www.taks.fo/en/business/vinnuskrain/about-vinnuskrain/
     */
    protected static $vtalFormat = '######';

    /**
     * Generates a v-tal number (6 digits).
     *
     * @return string
     */
    public static function vtal()
    {
        return static::numerify(static::$vtalFormat);
    }
}
