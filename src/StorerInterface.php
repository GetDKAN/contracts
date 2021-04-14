<?php

namespace Contracts;

use RootedData\RootedJsonData;

interface StorerInterface
{
  /**
   * Store.
   *
   * @param \RootedData\RootedJsonData $data
   *   The data to be stored.
   * @param string $id
   *   The identifier for the data. If the act of storing generates the
   *   id, there is no need to pass one.
   *
   * @return string
   *   The identifier.
   *
   * @throws \Exception
   *   Issues storing the data.
   */
  public function store(RootedJsonData $data, string $id = null): string;
}
