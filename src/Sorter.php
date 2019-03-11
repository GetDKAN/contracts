<?php

namespace Contracts;

interface Sorter
{
  public function sortByAscending(string $property);
  public function sortByDescending(string $property);
}