<?php

namespace Contracts;

use phpDocumentor\Reflection\Types\Integer;

interface Countable
{
  public function count(): int;
}