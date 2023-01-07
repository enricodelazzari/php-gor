<?php

namespace EnricoDeLazzari\Gor;

use InvalidArgumentException;

class Gor
{
    public const MIN = -900;

    public const MAX = 3300;

    public function __construct(
        public readonly float $value
    ) {
        if ($value < self::MIN) {
            throw new InvalidArgumentException;
        }

        if ($value > self::MAX) {
            throw new InvalidArgumentException;
        }
    }

    public static function make(Gor|float $value): self
    {
        if ($value instanceof Gor) {
            return $value;
        }

        return static::value($value);
    }

    public static function value(float $value): self
    {
        return new self($value);
    }

    public static function adjust(float $value): self
    {
        if ($value < self::MIN) {
            return static::value(self::MIN);
        }

        if ($value > self::MAX) {
            return static::value(self::MAX);
        }

        return static::value($value);
    }

    public static function max(): self
    {
        return new self(self::MAX);
    }

    public function add(Gor $gor): self
    {
        return new self($this->value + $gor->value);
    }

    public function diff(Gor $gor): self
    {
        return new self($this->value - $gor->value);
    }

    public function round(int $decimals = 3): float
    {
        return round($this->value, $decimals);
    }
}
