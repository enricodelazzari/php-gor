<?php

namespace EnricoDeLazzari\Gor;

final class Player
{
    public function __construct(
        public readonly Gor $gor,
        public readonly Color $color,
    ) {
    }
}
