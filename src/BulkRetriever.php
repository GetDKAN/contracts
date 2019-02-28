<?php

namespace Contracts;


interface BulkRetriever
{

  /**
   * Retrieve all.
   *
   * @return array
   *   An array of strings keyed by id.
   */
  public function retrieveAll(): array;
}