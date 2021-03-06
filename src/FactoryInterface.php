<?php

namespace Contracts;

interface FactoryInterface
{
  /**
   * Construct or deliver an object of the expected class.
   *
   * For example a MemoryStorage factory should return
   * MemoryStorage objects.
   *
   * @param string $identifier
   *   Some way to discern between different instances of a class.
   *
   * @return mixed
   */
    public function getInstance(string $identifier, array $config = []);
}
