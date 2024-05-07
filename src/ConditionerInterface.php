<?php

namespace Contracts;

@trigger_error(__NAMESPACE__ . '\ConditionerInterface is deprecated.', E_USER_DEPRECATED);

interface ConditionerInterface
{
    public function conditionByIsEqualTo(string $property, string $value);
}
