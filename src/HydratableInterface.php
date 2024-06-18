<?php

namespace Contracts;

@trigger_error(
    __NAMESPACE__ . '\HydratableInterface is deprecated. Use \Procrastinator\HydratableInterface intead.',
    E_USER_DEPRECATED
);

interface HydratableInterface extends \JsonSerializable
{
    public static function hydrate(string $json, $instance = null);
}
