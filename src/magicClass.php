<?php

namespace App;

// __construct: Called when an object is instantiated.
// __destruct: Called when an object is destroyed.
// __get: Called when accessing an undefined property.
// __set: Called when setting an undefined property.
// __isset: Called when checking if an undefined property is set.
// __unset: Called when unsetting an undefined property.
// __call: Called when calling an undefined method.
// __callStatic: Called when calling an undefined static method.
// __toString: Called when treating an object as a string.
// __invoke: Called when treating an object as a function.
// __clone: Called when an object is cloned.
// __sleep: Called before serialization.
// __wakeup: Called after unserialization.
// __serialize: Called for custom serialization logic.
// __unserialize: Called for custom unserialization logic.
// __debugInfo: Called when dumping the object with var_dump.

class MagicClass
{
    public function __construct()
    {
        echo "__construct called\n";
    }

    public function __destruct()
    {
        echo "__destruct called\n";
    }

    public function __get($name)
    {
        echo "__get called for property: $name\n";
    }

    public function __set($name, $value)
    {
        echo "__set called for property: $name with value: $value\n";
    }

    public function __isset($name)
    {
        echo "__isset called for property: $name\n";
    }

    public function __unset($name)
    {
        echo "__unset called for property: $name\n";
    }

    public function __call($name, $arguments)
    {
        echo "__call called for method: $name with arguments: " . implode(', ', $arguments) . "\n";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "__callStatic called for method: $name with arguments: " . implode(', ', $arguments) . "\n";
    }

    public function __toString()
    {
        return "__toString called\n";
    }

    public function __invoke()
    {
        echo "__invoke called\n";
    }

    public function __clone()
    {
        echo "__clone called\n";
    }

    public function __sleep()
    {
        echo "__sleep called\n";
        return [];
    }

    public function __wakeup()
    {
        echo "__wakeup called\n";
    }

    public function __serialize(): array
    {
        echo "__serialize called\n";
        return [];
    }

    public function __unserialize(array $data)
    {
        echo "__unserialize called\n";
    }

    public function __debugInfo()
    {
        return ['info' => "__debugInfo called"];
    }
}

