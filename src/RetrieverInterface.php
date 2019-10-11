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
     * @return mixed
     *   The data or null if no data could be retrieved.
     */
    public function retrieve(string $id);
}
