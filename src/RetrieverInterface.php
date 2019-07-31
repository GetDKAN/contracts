<?php

namespace Contracts;

interface RetrieverInterface
{
    /**
     * Retrieve.
     *
     * @param string $id
     *   The identifier for the data.
     *
     * @return string
     *   The data or null if no data could be retrieved.
     *
     * @throws \Exception
     *   No data matched the identifier.
     */
    public function retrieve(string $id): ?string;
}
