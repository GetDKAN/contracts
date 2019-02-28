<?php

namespace Contracts\Mock\IdGenerator;

class Sequential implements \Contracts\IdGenerator {
  private $id = 0;
  public function generate() {
    $this->id++;
    return $this->id;
  }
}