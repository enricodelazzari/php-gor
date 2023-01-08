<?php

namespace EnricoDeLazzari\Gor\Support;

use EnricoDeLazzari\Gor\Color;
use EnricoDeLazzari\Gor\Gor;

abstract class Player
{
    public function __construct(
        public readonly Gor $gor,
        public readonly Color $color,
    ) {
    }

    public function isBlack(): bool
    {
        return $this->color->isBlack();
    }

    public function isWhite(): bool
    {
        return $this->color->isWhite();
    }
}
