<?php

namespace Contracts;

@trigger_error(__CLASS__ . '\BulkStorerInterface is deprecated.', E_USER_DEPRECATED);

interface BulkStorerInterface
{

  /**
   * Store multiple.
   *
   * @param array $data
   *   An array of strings to be stored.
   */
    public function storeMultiple(array $data);
}
