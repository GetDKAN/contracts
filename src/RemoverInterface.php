<?php

namespace Contracts;

@trigger_error(__CLASS__ . '\RemoverInterface is deprecated.', E_USER_DEPRECATED);

interface RemoverInterface
{
  /**
   * Remove.
   *
   * @param string $id
   *   The identifier for the data.
   */
    public function remove(string $id);
}
