<?php

namespace Contracts;


interface Conditioner
{
  public function conditionByIsEqualTo(string $property, string $value);
}