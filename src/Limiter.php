<?php

namespace Contracts;

interface Limiter
{
  public function limitTo(int $number_of_items);
}