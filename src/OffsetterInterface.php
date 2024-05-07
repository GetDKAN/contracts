<?php

namespace Contracts;

@trigger_error(__NAMESPACE__ . '\OffsetterInterface is deprecated.', E_USER_DEPRECATED);

interface OffsetterInterface
{
    public function offsetBy(int $offset);
}
