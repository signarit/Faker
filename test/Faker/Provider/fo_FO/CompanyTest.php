<?php

namespace Faker\Test\Provider\fo_FO;

use Faker\Provider\fo_FO\Company;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class CompanyTest extends TestCase
{
    public function testCompanySuffix()
    {
        $companySuffix = ['Sp/f', 'P/F', 'ÍVF', 'Fa.'];

        self::assertContains($this->faker->companySuffix(), $companySuffix);
    }

    public function testVtal()
    {
        self::assertThat(
            $this->faker->vtal,
            self::logicalAnd(
                self::greaterThanOrEqual(100000),
                self::lessThanOrEqual(999999)
            )
        );
    }

    protected function getProviders(): iterable
    {
        yield new Company($this->faker);
    }
}
