<?php

namespace Faker\Provider\fo_FO;

use Faker\Provider\DateTime;

/**
 * @see https://hagstova.fo/fo/folk/folkatal/novn
 */
class Person extends \Faker\Provider\Person
{
    /**
     * @var array Faroese person name formats.
     */
    protected static $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
    ];

    protected static $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
    ];

    /**
     * @var array Faroese first names.
     *
     * @see https://hagstova.fo/fo/folk/folkatal/novn
     */
    protected static $firstNameMale = [
        'Allan', 'Andreas', 'Andrias', 'Ari', 'Aron',
        'Árni',
        'Bárður', 'Bartal', 'Benjamin', 'Bergur', 'Birgir', 'Bjarni', 'Bjartur', 'Bjarti', 'Boas', 'Bogi', 'Brandur',
        'Dánjal', 'Dávid', 'Dávur',
        'Eli', 'Elias', 'Emil', 'Eyðun',
        'Filip', 'Fríði', 'Fróði',
        'Gunnar',
        'Hákun', 'Hallur', 'Hans', 'Hans Jacob', 'Hanus', 'Heðin', 'Heini', 'Helgi', 'Heri', 'Hjalti', 'Høgni',
        'Ingi',
        'Jákup', 'Jan', 'Janus', 'Jóannes', 'Jógvan', 'Johan', 'Jóhan', 'Johannes', 'John', 'Jón', 'Jónas',
        'Kári', 'Kristian',
        'Leif', 'Leivur', 'Levi', 'Lukas',
        'Magni', 'Magnus', 'Markus', 'Martin', 'Mattias', 'Mikkjal',
        'Niels', 'Niklái', 'Nóa',
        'Ólavur', 'Óli',
        'Pætur', 'Páll', 'Pauli', 'Petur', 'Poul',
        'Ragnar', 'Rani', 'Rasmus', 'Regin', 'Rógvi', 'Rói', 'Rókur', 'Rúni',
        'Sámal', 'Signar', 'Silas', 'Símun', 'Sjúrður',
        'Teitur', 'Tóki',
        'Torkil', 'Tróndur', 'Tummas', 'Uni',
    ];

    protected static $firstNameFemale = [
        'Andrea', 'Anita', 'Anja', 'Ann', 'Anna', 'Anna Maria', 'Anna Sofía', 'Annika',
        'Ása',
        'Bára', 'Barbara', 'Beinta', 'Birgit', 'Birita', 'Bjørg', 'Bjørk', 'Bjørt', 'Brynhild',
        'Durita',
        'Elin', 'Elisabeth', 'Elsa', 'Emma', 'Erla', 'Ester', 'Eva', 'Eyð', 'Eydna',
        'Fríða',
        'Guðrið', 'Guðrun', 'Gunnvá',
        'Hanna', 'Heidi', 'Helena', 'Hildur', 'Hjørdis',
        'Ingibjørg',
        'Joan', 'Jóhanna', 'Jóna', 'Jórun', 'Julia',
        'Karin', 'Katrin', 'Kristina',
        'Lea', 'Lilja', 'Linda', 'Lív',
        'Malan', 'Maria', 'Marita', 'Marjun', 'Miriam',
        'Nina',
        'Olivia',
        'Óluva',
        'Petra',
        'Rakul', 'Randi', 'Rannvá', 'Rebekka', 'Ronja', 'Rósa', 'Rúna', 'Ruth',
        'Sára', 'Sigrun', 'Silja', 'Sofía', 'Sólrun', 'Sólvá', 'Sonja', 'Súsanna',
        'Tóra', 'Turið',
        'Vár',
    ];

    /**
     * @var array Faroese last names.
     *
     * @see https://hagstova.fo/fo/folk/folkatal/novn
     */
    protected static $lastName = [
        'Andreasen',
        'Bech', 'Berg',
        'Christiansen',
        'Dahl', 'Dam', 'Danielsen', 'Davidsen', 'Djurhuus',
        'Egholm', 'Eliasen', 'Ellingsgaard',
        'Hammer', 'Hansen', 'Haraldsen', 'Heinesen', 'Hentze', 'Højgaard', 'Holm',
        'Isaksen',
        'Jacobsen', 'Jakobsen', 'Jensen', 'Joensen', 'Johannesen', 'Johannessen', 'Johansen', 'Justinussen',
        'Kjærbo',
        'Lamhauge', 'Larsen',
        'Magnussen', 'Midjord', 'Mikkelsen', 'Mohr', 'Mortensen', 'Müller',
        'Niclasen', 'Nielsen', 'Nolsøe',
        'Olsen',
        'Petersen', 'Poulsen',
        'Rasmussen',
        'Samuelsen', 'Simonsen', 'Sivertsen', 'Sørensen',
        'Thomassen', 'Thomsen',
        'Vang',
        'Weihe',
        'Zachariasen',
    ];

    protected static $titleMale = ['Harra'];

    protected static $titleFemale = ['Frøkun', 'Frú'];

    /**
     * Randomly return a faroese P-tal (Person number) format.
     *
     * @see https://fo.wikipedia.org/wiki/P-tal
     *
     * @return string
     */
    public static function ptal()
    {
        $birthdate = DateTime::dateTimeThisCentury();

        return sprintf('%s-%s', $birthdate->format('dmy'), static::numerify('%###'));
    }
}
