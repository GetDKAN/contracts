<?php

namespace Contracts;

@trigger_error(__CLASS__ . '\IdGeneratorInterface is deprecated.', E_USER_DEPRECATED);

interface IdGeneratorInterface
{
    public function generate();
}
