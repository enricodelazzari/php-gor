<?php

namespace EnricoDeLazzari\Gor\Support;

use EnricoDeLazzari\Gor\Color;
use EnricoDeLazzari\Gor\Gor;

final class White extends Player
{
    public function __construct(Gor $gor)
    {
        parent::__construct($gor, Color::WHITE);
    }
}
