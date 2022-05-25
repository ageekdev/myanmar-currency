<?php

namespace AgeekDev\MyanmarCurrency\Traits;

trait SarDataSetTrait
{
    protected array $myanmarNumber = [
        '1' => 'တစ်',
        '2' => 'နှစ်',
        '3' => 'သုံး',
        '4' => 'လေး',
        '5' => 'ငါး',
        '6' => 'ခြောက်',
        '7' => 'ခုနစ်',
        '8' => 'ရှစ်',
        '9' => 'ကိုး',
    ];
    protected array $methodsNames = [
        '2' => ['twoDigitNumber', 'twoDigitNumbers'],
        '3' => ['threeDigitNumber', 'threeDigitNumbers'],
        '4' => ['fourDigitNumber', 'fourDigitNumbers'],
        '5' => ['fiveDigitNumber', 'fiveDigitNumbers'],
        '6' => ['sixDigitNumber', 'sixDigitNumbers'],
        '7' => ['sevenDigitNumber', 'sevenDigitNumbers'],
        '8' => ['eightDigitNumber', 'eightDigitNumbers'],
        '9' => ['nineDigitNumber', 'nineDigitNumbers'],
        '10' => ['tenDigitNumber', 'tenDigitNumbers'],
    ];

    public function methodNamesHelper($count)
    {
        return $this->methodsNames[$count] ?? "";
    }

    protected function myanmarNumber($index): string
    {
        return $this->myanmarNumber[$index] ?? "";
    }

    public function twoDigitNumber($x): string
    {
        $twoDigitNumber = [
            '1' => 'ကျပ်',
            '0' => 'ဆယ်',
        ];

        return $twoDigitNumber[$x] ?? "";
    }

    public function twoDigitNumbers($x): string
    {
        $twoDigitNumberWithOf = [
            '1' => 'ကျပ်',
            '0' => 'ဆယ့်',
        ];

        return $twoDigitNumberWithOf[$x] ?? "";
    }

    protected function threeDigitNumber($x): string
    {
        $threeDigitNumber = [
            '2' => 'ကျပ်',
            '1' => 'ဆယ်',
            '0' => 'ရာ',
        ];

        return $threeDigitNumber[$x] ?? "";
    }

    protected function threeDigitNumbers($x): string
    {
        $threeDigitNumberWithOf = [
            '2' => 'ကျပ်',
            '1' => 'ဆယ့်',
            '0' => 'ရာ',
        ];

        return $threeDigitNumberWithOf[$x] ?? "";
    }

    protected function fourDigitNumber($x): string
    {
        $fourDigitNumber = [
            '3' => 'ကျပ်',
            '2' => 'ဆယ်',
            '1' => 'ရာ',
            '0' => 'ထောင်',
        ];

        return $fourDigitNumber[$x] ?? "";
    }

    protected function fourDigitNumbers($x): string
    {
        $fourDigitNumberWithOf = [
            '3' => 'ကျပ်',
            '2' => 'ဆယ့်',
            '1' => 'ရာ့',
            '0' => 'ထောင့်',
        ];

        return $fourDigitNumberWithOf[$x] ?? "";
    }

    protected function fiveDigitNumber($x): string
    {
        $fiveDigitNumber = [
            '4' => 'ကျပ်',
            '3' => 'ဆယ်',
            '2' => 'ရာ',
            '1' => 'ထောင်',
            '0' => 'သောင်း',
        ];

        return $fiveDigitNumber[$x] ?? "";
    }

    protected function fiveDigitNumbers($x): string
    {
        $fiveDigitNumberWithOf = [
            '4' => 'ကျပ်',
            '3' => 'ဆယ်',
            '2' => 'ရာ့',
            '1' => 'ထောင့်',
            '0' => 'သောင်း',
        ];

        return $fiveDigitNumberWithOf[$x] ?? "";
    }

    protected function sixDigitNumber($x): string
    {
        $sixDigitNumber = [
            '5' => 'ကျပ်',
            '4' => 'ဆယ်',
            '3' => 'ရာ',
            '2' => 'ထောင်',
            '1' => 'သောင်း',
            '0' => 'သိန်း',
        ];

        return $sixDigitNumber[$x] ?? "";
    }

    protected function sixDigitNumbers($x): string
    {
        $sixDigitNumberWithOf = [
            '5' => 'ကျပ်',
            '4' => 'ဆယ့်',
            '3' => 'ရာ့',
            '2' => 'ထောင့်',
            '1' => 'သောင်း',
            '0' => 'သိန်း',
        ];

        return $sixDigitNumberWithOf[$x] ?? "";
    }

    protected function sevenDigitNumber($x): string
    {
        $sevenDigitNumber = [
            '6' => 'ကျပ်',
            '5' => 'ဆယ်',
            '4' => 'ရာ',
            '3' => 'ထောင်',
            '2' => 'သောင်း',
            '1' => 'သိန်း',
            '0' => 'ဆယ်',
        ];

        return $sevenDigitNumber[$x] ?? "";
    }

    protected function sevenDigitNumbers($x): string
    {
        $sevenDigitNumberWithOf = [
            '6' => 'ကျပ်',
            '5' => 'ဆယ့်',
            '4' => 'ရာ့',
            '3' => 'ထောင့်',
            '2' => 'သောင်း',
            '1' => 'သိန်း',
            '0' => 'ဆယ့်',
        ];

        return $sevenDigitNumberWithOf[$x] ?? "";
    }

    protected function eightDigitNumber($x): string
    {
        $eightDigitNumber = [
            '7' => 'ကျပ်',
            '6' => 'ဆယ်',
            '5' => 'ရာ',
            '4' => 'ထောင်',
            '3' => 'သောင်း',
            '2' => 'သိန်း',
            '1' => 'ဆယ်',
            '0' => 'ရာ',
        ];

        return $eightDigitNumber[$x] ?? "";
    }

    protected function eightDigitNumbers($x): string
    {
        $eightDigitNumberWithOf = [
            '7' => 'ကျပ်',
            '6' => 'ဆယ့်',
            '5' => 'ရာ့',
            '4' => 'ထောင်',
            '3' => 'သောင်း',
            '2' => 'သိန်း',
            '1' => 'ဆယ့်',
            '0' => 'ရာ့',
        ];

        return $eightDigitNumberWithOf[$x] ?? "";
    }

    protected function nineDigitNumber($x): string
    {
        $nineDigitNumber = [
            '8' => 'ကျပ်',
            '7' => 'ဆယ် ',
            '6' => 'ရာ ',
            '5' => 'ထောင်',
            '4' => 'သောင်း',
            '3' => 'သိန်း',
            '2' => 'ဆယ်',
            '1' => 'ရာ',
            '0' => 'ထောင်',
        ];

        return $nineDigitNumber[$x] ?? "";
    }

    protected function nineDigitNumbers($x): string
    {
        $nineDigitNumberWithOf = [
            '8' => 'ကျပ်',
            '7' => 'ဆယ့် ',
            '6' => 'ရာ့',
            '5' => 'ထောင့်',
            '4' => 'သောင်း',
            '3' => 'သိန်း',
            '2' => 'ဆယ့်',
            '1' => 'ရာ့',
            '0' => 'ထောင့်',
        ];

        return $nineDigitNumberWithOf[$x] ?? "";
    }

    protected function tenDigitNumber($x): string
    {
        $tenDigitNumber = [
            '9' => 'ကျပ်',
            '8' => 'ဆယ်',
            '7' => 'ရာ',
            '6' => 'ထောင်',
            '5' => 'သောင်း',
            '4' => 'သိန်း',
            '3' => 'ဆယ်',
            '2' => 'ရာ',
            '1' => 'ထောင်',
            '0' => 'သောင်း',
        ];

        return $tenDigitNumber[$x] ?? "";
    }

    protected function tenDigitNumbers($x): string
    {
        $tenDigitNumberWithOf = [
            '9' => 'ကျပ်',
            '8' => 'ဆယ့်',
            '7' => 'ရာ့',
            '6' => 'ထောင့်',
            '5' => 'သောင်း',
            '4' => 'သိန်း',
            '3' => 'ဆယ့်',
            '2' => 'ရာ့',
            '1' => 'ထောင့်',
            '0' => 'သောင်း',
        ];

        return $tenDigitNumberWithOf[$x] ?? "";
    }
}
