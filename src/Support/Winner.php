<?php

namespace EnricoDeLazzari\Gor\Support;

use EnricoDeLazzari\Gor\Result;

enum Winner: string
{
    case BLACK = 'black';
    case WHITE = 'white';
    case JIGO = 'jigo';

    public function isJigo(): bool
    {
        return $this === self::JIGO;
    }

    public function is(Winner $winner): bool
    {
        return $this === $winner;
    }

    public function toResult(Player $player)
    {
        return match ($this) {
            Winner::JIGO => Result::JIGO,
            Winner::BLACK => $this->player->isBlack() ? Result::WIN : Result::LOSS,
            Winner::WHITE => $this->player->isWhite() ? Result::WIN : Result::LOSS,
        };
    }
}
