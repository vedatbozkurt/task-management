<?php
/*
 * @Author: @vedatbozkurt
 * @Email: info@wedat.org
 * @Date: 2020-12-12 16:48:25
 * @LastEditors: @vedatbozkurt
 * @LastEditTime: 2020-12-12 16:48:25
 */

namespace VedatBozkurt\TaskManagement;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Vedatbozkurt\TaskManagement\Skeleton\SkeletonClass
 */
class TaskManagementFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'task-management';
    }
}
