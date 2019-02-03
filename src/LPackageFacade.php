<?php

namespace Rahulbaruah\LPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rahulbaruah\LPackage\Skeleton\SkeletonClass
 */
class LPackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'l-package';
    }
}
