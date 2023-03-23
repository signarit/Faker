<?php

namespace Faker\Test\Provider\fo_FO;

use Faker\Provider\fo_FO\PhoneNumber;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PhoneNumberTest extends TestCase
{
    public function testPhoneNumber()
    {
        for ($i = 0; $i < 20; ++$i) {
            $phoneNumber = $this->faker->phoneNumber();

            self::assertGreaterThanOrEqual(6, strlen($phoneNumber));

            self::assertLessThanOrEqual(12, strlen($phoneNumber));
        }
    }

    public function testE164PhoneNumberFormat(): void
    {
        for ($i = 0; $i < 10; ++$i) {
            $number = $this->faker->e164PhoneNumber();

            $firstDigits = substr($number, 4, 3);

            self::assertMatchesRegularExpression('/^\+298\d{1,9}$/', $number);

            self::assertThat(
                (int) $firstDigits,
                self::logicalAnd(
                    self::greaterThanOrEqual(210),
                    self::lessThanOrEqual(290),
                ),
            );
        }
    }

    protected function getProviders(): iterable
    {
        yield new PhoneNumber($this->faker);
    }
}
