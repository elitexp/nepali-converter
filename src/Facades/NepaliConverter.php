<?php

namespace Elitexp\NepaliConverter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class NepaliConverter
 * @package Elitexp\NepaliConverter\Facades
 */
class NepaliConverter extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Elitexp\NepaliConverter\NepaliConverter::class;
    }
}
