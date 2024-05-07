<?php

namespace Contracts;

@trigger_error(__NAMESPACE__ . '\CountableInterface is deprecated.', E_USER_DEPRECATED);

use phpDocumentor\Reflection\Types\Integer;

interface CountableInterface
{
    public function count(): int;
}
