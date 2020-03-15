<?php

namespace Contracts;

interface BulkRetrieverInterface
{

  /**
   * Store multiple.
   *
   * @param array $data
   *   An array of strings to be stored.
   */
    public function storeMultiple(array $data);
}
