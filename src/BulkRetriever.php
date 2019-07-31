<?php

namespace Contracts;

interface BulkRetrieverInterface
{

  /**
   * Retrieve all.
   *
   * @return array
   *   An array of strings keyed by id.
   */
    public function retrieveAll(): array;
}
