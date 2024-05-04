<?php

namespace Contracts;

@trigger_error(__CLASS__ . '\ConditionerInterface is deprecated.', E_USER_DEPRECATED);

interface ConditionerInterface
{
    public function conditionByIsEqualTo(string $property, string $value);
}
