<?php

namespace EnricoDeLazzari\Gor;

enum Klass
{
    case A;
    case B;
    case C;
    case D;

    public function value(): float
    {
        return match ($this) {
            Klass::A => 1.00,
            Klass::B => 0.75,
            Klass::C => 0.50,
            Klass::D => 0.25,
        };
    }
}
