<?php

namespace EnricoDeLazzari\Gor;

enum Result
{
    case WIN;
    case JIGO;
    case LOSS;

    public function value(): float
    {
        return match ($this) {
            Result::WIN => 1.0,
            Result::JIGO => 0.5,
            Result::LOSS => 0.0,
        };
    }
}
