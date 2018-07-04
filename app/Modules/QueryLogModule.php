<?php

namespace App\Modules;

use Ytake\LaravelAspect\Modules\QueryLogModule as PackageQueryLogModule;

/**
 * Class QueryLogModule
 */
class QueryLogModule extends PackageQueryLogModule
{
    /** @var array */
    protected $classes = [
        // example
        // \App\Services\AcmeService::class
    ];
}
