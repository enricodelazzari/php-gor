<?php

namespace EnricoDeLazzari\Gor;

class Player
{
    public function __construct(
        public readonly Gor $gor,
        public readonly Color $color,
    ) {
    }
}
