<?php

namespace Contracts;

@trigger_error(__NAMESPACE__ . '\LimiterInterface is deprecated.', E_USER_DEPRECATED);

interface LimiterInterface
{
    public function limitTo(int $number_of_items);
}
