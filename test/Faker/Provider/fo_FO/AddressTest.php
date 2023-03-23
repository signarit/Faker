<?php

namespace Faker\Provider\fo_FO;

use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class AddressTest extends TestCase
{
    public function testPostcode(): void
    {
        $postcode = $this->faker->postcode();

        self::assertGreaterThanOrEqual(100, $postcode);

        self::assertLessThanOrEqual(970, $postcode);
    }

    public function testMunicipality()
    {
        $municipality = [
            'Eiðis', 'Eystur', 'Fámjins', 'Fuglafjarðar', 'Fugloyar', 'Hovs', 'Húsar', 'Húsavíkar', 'Hvalbiar', 'Hvannasunds', 'Klaksvíkar', 'Kunoyar', 'Kvívíkar', 'Nes', 'Porkeris', 'Runavíkar', 'Sands', 'Sjóvar', 'Skálavíkar', 'Skopunar', 'Skúgvoyar', 'Skúvoyar', 'Sørvágs', 'Sumbiar', 'Sunda', 'Tórshavnar', 'Tvøroyrar', 'Vágs', 'Vága', 'Vestmanna', 'Viðareiðis',
        ];

        self::assertContains($this->faker->municipality, $municipality);
    }

    public function testKommuna()
    {
        $municipality = [
            'Eiðis', 'Eystur', 'Fámjins', 'Fuglafjarðar', 'Fugloyar', 'Hovs', 'Húsar', 'Húsavíkar', 'Hvalbiar', 'Hvannasunds', 'Klaksvíkar', 'Kunoyar', 'Kvívíkar', 'Nes', 'Porkeris', 'Runavíkar', 'Sands', 'Sjóvar', 'Skálavíkar', 'Skopunar', 'Skúgvoyar', 'Skúvoyar', 'Sørvágs', 'Sumbiar', 'Sunda', 'Tórshavnar', 'Tvøroyrar', 'Vágs', 'Vága', 'Vestmanna', 'Viðareiðis',
        ];

        self::assertContains($this->faker->kommuna, $municipality);
    }

    public function testCounty()
    {
        $county = [
            'Streymoy', 'Eysturoy', 'Vágar', 'Suðuroy', 'Sandoy', 'Borðoy', 'Viðoy', 'Kunoy', 'Kalsoy', 'Svínoy', 'Fugloy', 'Nólsoy', 'Mykines', 'Skúvoy', 'Hestur', 'Stóra Dímun', 'Koltur', 'Lítla Dímun'
        ];

        self::assertContains($this->faker->county, $county);
    }

    public function testLatitude()
    {
        $latitudeMin = -7.68;
        $latitudeMax = -6.26;

        self::assertThat(
            $this->faker->latitude,
            self::logicalAnd(
                self::greaterThanOrEqual($latitudeMin),
                self::lessThanOrEqual($latitudeMax)
            )
        );
    }

    public function testLongitude()
    {
        $longitudeMin = 61.39;
        $longitudeMax = 62.39;

        self::assertThat(
            $this->faker->longitude,
            self::logicalAnd(
                self::greaterThanOrEqual($longitudeMin),
                self::lessThanOrEqual($longitudeMax)
            )
        );
    }

    protected function getProviders(): iterable
    {
        yield new Address($this->faker);
    }
}
