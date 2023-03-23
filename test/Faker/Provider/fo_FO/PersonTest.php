<?php

namespace Faker\Test\Provider\fo_FO;

use Faker\Provider\fo_FO\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testTitleMale()
    {
        $titleMale = ['Harra'];

        self::assertContains(Person::titleMale(), $titleMale);
    }

    public function testTitleFemale()
    {
        $titleFemale = ['Frøkun', 'Frú'];

        self::assertContains(Person::titleFemale(), $titleFemale);
    }

    public function testMaleFirstName()
    {
        $firstNameMale = [
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
            'Torkil', 'Tróndur', 'Tummas', 'Uni'
        ];

        self::assertContains($this->faker->firstName('male'), $firstNameMale);
    }

    public function testFemaleFirstName()
    {
        $firstNameFemale = [
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

        self::assertContains($this->faker->firstName('female'), $firstNameFemale);
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
