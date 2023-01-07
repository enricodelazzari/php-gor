<?php

namespace EnricoDeLazzari\Gor;

class GorCalculator
{
    public function __construct(
        protected Gor|float $player,
        protected Gor|float $opponent,
        protected Result $result,
        protected Klass $klass,
    ) {
        $this->player = Gor::make($player);
        $this->opponent = Gor::make($opponent);
    }

    public static function for(
        Gor|float $player,
        Gor|float $opponent,
        Result $result,
        Klass $klass
    ) {
        return new self(
            $player,
            $opponent,
            $result,
            $klass
        );
    }

    public function get(): Gor
    {
        $change = $this->calc() * $this->klass->value();

        return Gor::adjust($this->player->value + $change);
    }

    public function change(): Gor
    {
        return $this->get()->diff($this->player);
    }

    public function next(): Gor
    {
        return $this->get();
    }

    public function round(int $decimals = 3): float
    {
        return $this->get()->round($decimals);
    }

    public function getCon(): float
    {
        return pow((Gor::max()->diff($this->player)->value / 200), 1.6);
    }

    public function getBeta(Gor $gor): float
    {
        return -7 * log(Gor::max()->diff($gor)->value);
    }

    public function getSe(): float
    {
        $opponent = $this->getBeta($this->opponent);
        $player = $this->getBeta($this->player);

        return 1 / (1 + exp($opponent - $player));
    }

    public function getBonus(): float
    {
        return log(1 + exp((2300 - $this->player->value) / 80)) / 5;
    }

    protected function calc(): float
    {
        return $this->getCon() * ($this->result->value() - $this->getSe()) + $this->getBonus();
    }
}
