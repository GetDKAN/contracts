<?php

namespace Contracts;


interface BulkRetriever
{

  /**
   * Retrieve all.
   *
   * @return string
   *   A json string with an array of objects.
   */
  public function retrieveAll();
}