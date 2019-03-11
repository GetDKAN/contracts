<?php

namespace Contracts\Mock\Storage;

use Contracts\Storage;
use Contracts\BulkRetriever;

class Memory implements Storage, BulkRetriever {

  private $storage = [];

  public function retrieve(string $id): ?string
  {
    if (isset($this->storage[$id])) {
      return $this->storage[$id];
    }
    return NULL;
  }

  public function retrieveAll(): array
  {
    return $this->storage;
  }

  public function store(string $data, string $id = NULL): string
  {
    if (!isset($id)) {
      throw new \Exception("An id is required to store the data.");
    }
    if (!isset($this->storage[$id])) {
      $this->storage[$id] = $data;
      return $id;
    }
    $this->storage[$id] = $data;
    return TRUE;
  }

  public function remove(string $id)
  {
    if (isset($this->storage[$id])) {
      unset($this->storage[$id]);
      return TRUE;
    }
    return FALSE;
  }

}