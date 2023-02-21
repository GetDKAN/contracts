<?php

namespace Contracts\Mock\IdGenerator;

use Contracts\IdGeneratorInterface;

class Sequential implements IdGeneratorInterface
{
    private int $id = 0;
    public function generate()
    {
        $this->id++;
        return $this->id;
    }
}
