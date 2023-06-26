<?php

namespace AdminKit\Faqs\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AdminKit\Faqs\Faqs
 */
class Faqs extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AdminKit\Faqs\Faqs::class;
    }
}
