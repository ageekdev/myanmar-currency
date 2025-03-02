<?php

it('can run eng digit to myanmar currency', closure: function (string $engNumber, string $outputMyanmarNum) {
    $response = $this->currency->convertMyanmarText($engNumber);
    expect($response)->toEqual($outputMyanmarNum);
})->with([
    ['1', 'တစ်'],
    ['10', 'တစ်ဆယ်'],
    ['100', 'တစ်ရာ'],
    ['1000', 'တစ်ထောင်'],
    ['10000', 'တစ်သောင်း'],
    ['100000', 'တစ်သိန်း'],
    ['1000000', 'ဆယ်သိန်း'],
    ['10000000', 'သိန်းတစ်ရာ'],
    ['100000000', 'သိန်းတစ်ထောင်'],
    ['1000000000', 'သိန်းတစ်သောင်း'],
]);

it('throws exception number only', closure: function () {
    $this->currency->convertMyanmarText('-1000');
})->throws(Exception::class);

it('throws exception start with 0', function () {
    $this->currency->convertMyanmarText('01000');
})->throws(Exception::class);
