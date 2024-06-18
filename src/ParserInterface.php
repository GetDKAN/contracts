<?php


namespace Contracts;

@trigger_error(
    __NAMESPACE__ . '\ParserInterface is deprecated. Use \CsvParser\Parser\ParserInterface intead.',
    E_USER_DEPRECATED
);

interface ParserInterface
{
    public function feed(string $chunk);

    public function getRecord();

    public function reset();

    public function finish();
}
