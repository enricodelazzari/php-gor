<?php

namespace EnricoDeLazzari\Gor\Support;

use EnricoDeLazzari\Gor\Color;
use EnricoDeLazzari\Gor\Gor;

final class Black extends Player
{
    public function __construct(Gor $gor)
    {
        parent::__construct($gor, Color::BLACK);
    }
}
