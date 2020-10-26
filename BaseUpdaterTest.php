<?php

class BaseUpdaterTest extends BaseTestSetup
{

     public static function assertAttributeNotCount(int $expectedCount, string $haystackAttributeName, $haystackClassOrObject, string $message = ''): void
    {
        static::assertNotCount(
            $expectedCount,
            static::readAttribute($haystackClassOrObject, $haystackAttributeName),
            $message
        );
    }

public static function assertEquals($expected, $actual, string $message = '', float $delta = 0.0, int $maxDepth = 10, bool $canonicalize = false, bool $ignoreCase = false): void
    {
        $constraint = new IsEqual(
            $expected,
            $delta,
            $maxDepth,
            $canonicalize,
            $ignoreCase
        );

        static::assertThat($actual, $constraint, $message);
    }

public static function assertEqualsCanonicalizing($expected, $actual, string $message = ''): void
    {
        $constraint = new IsEqual(
            $expected,
            0.0,
            10,
            true,
            false
        );

        static::assertThat($actual, $constraint, $message);
    }

}
