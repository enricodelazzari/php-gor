<?php

namespace EnricoDeLazzari\Gor;

enum Handicap: int
{
    case EVEN = 0;
    case ONE = 1;
    case TWO = 2;
    case THREE = 3;
    case FOUR = 4;
    case FIVE = 5;
    case SIX = 6;
    case SEVEN = 7;
    case EIGHT = 8;
    case NINE = 9;

    public function gor(/*Color $color*/): Gor
    {
        // if ($color->is(Color::WHITE)) {
        //     return Gor::value(0);
        // }

        return Gor::value(match ($this->value) {
            0 => 0,
            default => (100 * $this->value) - 50,
        });
    }
}
