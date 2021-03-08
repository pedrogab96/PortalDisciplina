<?php

namespace App\Enums;

use ReflectionClass;

class Enum
{
    /**
     * Gets all defined constants from a class.
     * @return array
     */
    public static function getConstants() {
        $oClass = new ReflectionClass(static::class);
        return $oClass->getConstants();
    }
}
