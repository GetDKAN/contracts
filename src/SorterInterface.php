<?php

namespace Contracts;

@trigger_error(__NAMESPACE__ . '\SorterInterface is deprecated.', E_USER_DEPRECATED);

interface SorterInterface
{
    public function sortByAscending(string $property);
    public function sortByDescending(string $property);
}
