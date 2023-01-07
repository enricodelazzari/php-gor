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
}
