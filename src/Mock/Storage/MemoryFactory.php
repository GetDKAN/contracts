<?php

namespace Contracts\Mock\Storage;

use Contracts\FactoryInterface;

class MemoryFactory implements FactoryInterface
{

    private $stores;

    public function getInstance($identifier)
    {
        if (!isset($this->stores[$identifier])) {
            $this->stores[$identifier] = new Memory();
        }
        return $this->stores[$identifier];
    }
}
