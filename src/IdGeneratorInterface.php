<?php

namespace Contracts;

@trigger_error(__NAMESPACE__ . '\IdGeneratorInterface is deprecated.', E_USER_DEPRECATED);

interface IdGeneratorInterface
{
    public function generate();
}
