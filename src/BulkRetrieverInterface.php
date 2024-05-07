<?php

namespace Contracts;

@trigger_error(__NAMESPACE__ . '\BulkRetrieverInterface is deprecated.', E_USER_DEPRECATED);

interface BulkRetrieverInterface
{

  /**
   * Retrieve all.
   *
   * @return array
   *   An array of ids.
   */
    public function retrieveAll(): array;
}
