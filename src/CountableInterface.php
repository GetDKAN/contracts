<?php

namespace Contracts;

use phpDocumentor\Reflection\Types\Integer;

interface CountableInterface
{
    public function count(): int;
}
