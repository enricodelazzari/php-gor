<?php

use EnricoDeLazzari\Gor\Gor;
use EnricoDeLazzari\Gor\GorCalculator;
use EnricoDeLazzari\Gor\Klass;
use EnricoDeLazzari\Gor\Result;

it('can test', function ($klass, $player, $opponent, $result, $change): void {
    $calc = GorCalculator::for(
        player: $player,
        opponent: $opponent,
        result: $result,
        klass: $klass
    );

    expect($calc->get()->round())->toBe(Gor::make($player + $change)->round());
    expect($calc->next()->round())->toBe(Gor::make($player + $change)->round());
    expect($calc->round())->toBe(Gor::make($player + $change)->round());
    expect($calc->change()->round())->toBe(Gor::make($change)->round());
})->with([
    ['klass' => Klass::A, 'player' => 1269.982, 'opponent' => 1300.000, 'result' => Result::WIN, 'change' => 24.023],
    ['klass' => Klass::A, 'player' => 1269.982, 'opponent' => 1439.117, 'result' => Result::WIN, 'change' => 28.983],
    ['klass' => Klass::A, 'player' => 1269.982, 'opponent' => 1560.967, 'result' => Result::LOSS, 'change' => -7.737],
    ['klass' => Klass::A, 'player' => 1269.982, 'opponent' => 1498.418, 'result' => Result::LOSS, 'change' => -9.756],
    ['klass' => Klass::A, 'player' => 1269.982, 'opponent' => 1112.820, 'result' => Result::JIGO, 'change' => -2.628],

    ['klass' => Klass::A, 'player' => 1300.000, 'opponent' => 1269.982, 'result' => Result::LOSS, 'change' => -18.442],
    ['klass' => Klass::A, 'player' => 1439.117, 'opponent' => 1269.982, 'result' => Result::LOSS, 'change' => -20.824],
    ['klass' => Klass::A, 'player' => 1560.967, 'opponent' => 1269.982, 'result' => Result::WIN, 'change' => 9.899],
    ['klass' => Klass::A, 'player' => 1498.418, 'opponent' => 1269.982, 'result' => Result::WIN, 'change' => 12.191],
    ['klass' => Klass::A, 'player' => 1112.820, 'opponent' => 1269.982, 'result' => Result::JIGO, 'change' => 8.83],

    ['klass' => Klass::A, 'player' => 1269.982, 'opponent' => 1300.000, 'result' => Result::LOSS, 'change' => -16.749],
    ['klass' => Klass::A, 'player' => 1269.982, 'opponent' => 1439.117, 'result' => Result::LOSS, 'change' => -11.788],
    ['klass' => Klass::A, 'player' => 1269.982, 'opponent' => 1560.967, 'result' => Result::WIN, 'change' => 33.034],
    ['klass' => Klass::A, 'player' => 1269.982, 'opponent' => 1498.418, 'result' => Result::WIN, 'change' => 31.015],

    ['klass' => Klass::B, 'player' => 1269.982, 'opponent' => 1300.000, 'result' => Result::WIN, 'change' => 18.017],
    ['klass' => Klass::B, 'player' => 1269.982, 'opponent' => 1439.117, 'result' => Result::WIN, 'change' => 21.737],
    ['klass' => Klass::B, 'player' => 1269.982, 'opponent' => 1560.967, 'result' => Result::LOSS, 'change' => -5.803],
    ['klass' => Klass::B, 'player' => 1269.982, 'opponent' => 1498.418, 'result' => Result::LOSS, 'change' => -7.317],
    ['klass' => Klass::B, 'player' => 1269.982, 'opponent' => 1112.820, 'result' => Result::JIGO, 'change' => -1.971],

    ['klass' => Klass::C, 'player' => 1269.982, 'opponent' => 1300.000, 'result' => Result::WIN, 'change' => 12.011],
    ['klass' => Klass::C, 'player' => 1269.982, 'opponent' => 1439.117, 'result' => Result::WIN, 'change' => 14.491],
    ['klass' => Klass::C, 'player' => 1269.982, 'opponent' => 1560.967, 'result' => Result::LOSS, 'change' => -3.869],
    ['klass' => Klass::C, 'player' => 1269.982, 'opponent' => 1498.418, 'result' => Result::LOSS, 'change' => -4.878],
    ['klass' => Klass::C, 'player' => 1269.982, 'opponent' => 1112.820, 'result' => Result::JIGO, 'change' => -1.314],

    ['klass' => Klass::D, 'player' => 1269.982, 'opponent' => 1300.000, 'result' => Result::WIN, 'change' => 6.006],
    ['klass' => Klass::D, 'player' => 1269.982, 'opponent' => 1439.117, 'result' => Result::WIN, 'change' => 7.246],
    ['klass' => Klass::D, 'player' => 1269.982, 'opponent' => 1560.967, 'result' => Result::LOSS, 'change' => -1.934],
    ['klass' => Klass::D, 'player' => 1269.982, 'opponent' => 1498.418, 'result' => Result::LOSS, 'change' => -2.439],
    ['klass' => Klass::D, 'player' => 1269.982, 'opponent' => 1112.820, 'result' => Result::JIGO, 'change' => -0.657],
]);
