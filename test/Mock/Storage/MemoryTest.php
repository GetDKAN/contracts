<?php

declare(strict_types=1);

namespace ContractsTest;

use Contracts\Mock\Storage\MemoryFactory;

class MemoryTest extends \PHPUnit\Framework\TestCase
{
    public function testStorageMemoryException()
    {
        $factory = new MemoryFactory();
        $store = $factory->getInstance("store");

        $this->expectExceptionMessage("An id is required to store the data.");
        $store->store("Data");
    }

    public function testStorageMemory()
    {
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

    public function testStorageJsonObjectMemory()
    {
        $objects = [];
        $objects[] = <<<JSON
{
  "first": "Gerardo",
  "last": "Gonzalez"
}
JSON;

        $objects[] = <<<JSON
{
  "first": "Pedro",
  "last": "Gonzalez"
}
JSON;

        $objects[] = <<<JSON
{
  "first": "Gerardo",
  "last": "Lopez"
}
JSON;

        $objects[] = <<<JSON
{
  "first": "Jhonny",
  "last": "Five"
}
JSON;

        $store = new \Contracts\Mock\Storage\JsonObjectMemory();


        foreach ($objects as $index => $object) {
            $store->store($object, "{$index}");
        }

        $this->assertEquals(4, count($store->retrieveAll()));

        $store->offsetBy(1);
        $store->limitTo(1);

        foreach ($store->retrieveAll() as $string) {
            $this->assertEquals($objects[1], $string);
        }

        $store->offsetBy(3);

        foreach ($store->retrieveAll() as $string) {
            $this->assertEquals($objects[3], $string);
        }

        $store->limitTo(1);

        foreach ($store->retrieveAll() as $string) {
            $this->assertEquals($objects[0], $string);
        }

        $store->sortByAscending("first");

        $order = [0, 2, 3, 1];
        $order_index = 0;
        foreach ($store->retrieveAll() as $string) {
            $this->assertEquals($objects[$order[$order_index]], $string);
            $order_index++;
        }

        $store->sortByDescending("first");

        $order = [1, 3, 2, 0];
        $order_index = 0;
        foreach ($store->retrieveAll() as $string) {
            $this->assertEquals($objects[$order[$order_index]], $string);
            $order_index++;
        }

        $store->conditionByIsEqualTo("first", "Gerardo");

        $order = [0, 2];
        $order_index = 0;
        foreach ($store->retrieveAll() as $string) {
            $this->assertEquals($objects[$order[$order_index]], $string);
            $order_index++;
        }
    }
}
