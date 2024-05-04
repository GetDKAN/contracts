<?php

namespace Contracts;

@trigger_error(__CLASS__ . '\HydratableInterface is deprecated.', E_USER_DEPRECATED);

interface HydratableInterface extends \JsonSerializable
{
    public static function hydrate(string $json, $instance = null);
}
