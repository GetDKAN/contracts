<?php


namespace Contracts;

interface ParserInterface
{
    public function feed(string $chunk);

    public function getRecord();

    public function reset();

    public function finish();
}
