<?php


class Entity implements Annotation
{

    public static function assertEqualsWithDelta($expected, $actual, float $delta, string $message = ''): void
    {
        $constraint = new IsEqual(
            $expected,
            $delta
        );

        static::assertThat($actual, $constraint, $message);
    }

    /**
     * @var string
     */
    public $repositoryClass;

    /**
     * @var boolean
     */
    public $readOnly = false;
}
