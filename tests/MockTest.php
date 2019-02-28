<?php
declare(strict_types=1);

class MockTest extends \PHPUnit\Framework\TestCase
{
  public function testStorageMemoryException() {
    $store = new \Contracts\Mock\Storage\Memory();

    $this->expectExceptionMessage("An id is required to store the data.");
    $store->store("Data");
  }

  public function testStorageMemory() {
    $store = new \Contracts\Mock\Storage\Memory();

    $store->store("Data", "1");
    $this->assertEquals("Data", $store->retrieve("1"));

    $store->store("Data 2", "2");
    $this->assertEquals("Data 2", $store->retrieve("2"));

    $all = $store->retrieveAll();
    $this->assertTrue(is_array($all));

    $this->assertEquals("Data", $all["1"]);

    $store->remove("1");

    $this->assertNull($store->retrieve("1"));
  }

}