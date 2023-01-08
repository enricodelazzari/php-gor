<?php

namespace EnricoDeLazzari\Gor\Support;

use EnricoDeLazzari\Gor\Gor;
use EnricoDeLazzari\Gor\GorCalculator;
use EnricoDeLazzari\Gor\Handicap;
use EnricoDeLazzari\Gor\Klass;
use EnricoDeLazzari\Gor\Result;

final class Game
{
    public function __construct(
        public readonly Black $black,
        public readonly White $white,
        public readonly Klass $klass,
        public readonly Handicap $handicap,
        public readonly Winner $winner,
    ) {
    }

    public function getNextBlackGor(): Gor
    {
        return $this->getBlackCalculator()->get();
    }

    public function getNextWhiteGor(): Gor
    {
        return $this->getWhiteCalculator()->get();
    }

    public function getPlayerResult(Player $player): Result
    {
        return $this->winner->toResult($player);
    }

    public function getBlackResult(): Result
    {
        return $this->winner->toResult($this->black);
    }

    public function getWhiteResult(): Result
    {
        return $this->winner->toResult($this->white);
    }

    private function getBlackCalculator(): GorCalculator
    {
        return GorCalculator::for(
            player: $this->black->gor->add(
                $this->handicap->gor()
            ),
            opponent: $this->white->gor,
            result: $this->getBlackResult(),
            klass: $this->klass
        );
    }

    private function getWhiteCalculator(): GorCalculator
    {
        return GorCalculator::for(
            player: $this->white->gor,
            opponent: $this->black->gor,
            result: $this->getWhiteResult(),
            klass: $this->klass
        );
    }
}
