<?php

use function PHPUnit\Framework\assertEquals;

it('can run on 2 digit', function () {
    $response = $this->currency->convertMyanmarText('10');
    assertEquals('တစ်ဆယ်', $response);
});
it('can run on 3 digit', function () {
    $response = $this->currency->convertMyanmarText('100');
    assertEquals('တစ်ရာ', $response);
});
it('can run on 4 digit', function () {
    $response = $this->currency->convertMyanmarText('1000');
    assertEquals('တစ်ထောင်', $response);
});
it('can run on 5 digit', function () {
    $response = $this->currency->convertMyanmarText('10000');
    assertEquals('တစ်သောင်း', $response);
});
it('can run on 6 digit', function () {
    $response = $this->currency->convertMyanmarText('100000');
    assertEquals('တစ်သိန်း', $response);
});
it('can run on 7 digit', function () {
    $response = $this->currency->convertMyanmarText('1000000');
    assertEquals('ဆယ်သိန်း', $response);
});
it('can run on 8 digit', function () {
    $response = $this->currency->convertMyanmarText('10000000');
    assertEquals('သိန်းတစ်ရာ', $response);
});
it('can run on 9 digit', function () {
    $response = $this->currency->convertMyanmarText('100000000');
    assertEquals('သိန်းတစ်ထောင်', $response);
});
it('can run on 10 digit', function () {
    $response = $this->currency->convertMyanmarText('1000000000');
    assertEquals('သိန်းတစ်သောင်း', $response);
});
it('throws exception number only', function () {
    $this->currency->convertMyanmarText('-1000');
})->throws(Exception::class);
it('throws exception start with 0', function () {
    $this->currency->convertMyanmarText('01000');
})->throws(Exception::class);
