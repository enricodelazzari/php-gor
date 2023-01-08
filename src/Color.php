<?php

namespace EnricoDeLazzari\Gor;

enum Color: string
{
    case BLACK = 'black';
    case WHITE = 'white';

    public function is(Color $color): bool
    {
        return $this === $color;
    }

    public function isBlack(): bool
    {
        return $this->is(Color::BLACK);
    }

    public function isWhite(): bool
    {
        return $this->is(Color::WHITE);
    }
}
