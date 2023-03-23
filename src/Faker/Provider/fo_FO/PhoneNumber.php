<?php

namespace Faker\Provider\fo_FO;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @var string Faroese country code
     */
    protected static $countryCode = '+298';

    /**
     * @var array Faroese phonenumber formats.
     */
    protected static $formats = [
        '+298 ######',
        '+298 ### ###',
        '+298######',
        '######',
        '### ###'
    ];

    /**
     * Faroese phone number
     *
     * Faroese mobile phone numbers are six digits
     * and in the range from 210000 to 290000
     *
     * @example '204020'
     */
    public function phoneNumber()
    {
        $firstDigits = static::numberBetween(210, 290);

        $lastDigits = str_pad(static::numberBetween(000, 999), 3, '0', STR_PAD_LEFT);

        switch (static::randomElement(static::$formats)) {
            case '+298 ######':
                $formattedPhoneNumber = static::$countryCode . ' ' . $firstDigits . $lastDigits;
                break;
            case '+298 ### ###':
                $formattedPhoneNumber = static::$countryCode . ' ' . $firstDigits . ' ' . $lastDigits;
                break;
            case '+298######':
                $formattedPhoneNumber = static::$countryCode . $firstDigits . $lastDigits;
                break;
            case '######':
                $formattedPhoneNumber = $firstDigits . $lastDigits;
                break;
            case '### ###':
                $formattedPhoneNumber = $firstDigits . ' ' . $lastDigits;
                break;
            default:
                $formattedPhoneNumber = static::$countryCode . ' ' . $firstDigits . $lastDigits;
        }

        return $formattedPhoneNumber;
    }

    /**
     * Faroese mobile phone number in E.164 format
     */
    public function e164PhoneNumber()
    {
        $firstDigits = static::numberBetween(210, 290);

        $lastDigits = static::numberBetween(000, 999);

        return static::$countryCode . $firstDigits . $lastDigits;
    }
}
