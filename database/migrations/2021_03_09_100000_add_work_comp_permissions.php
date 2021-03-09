<?php

declare(strict_types=1);

use Tipoff\Authorization\Permissions\BasePermissionsMigration;

class AddWorkCompPermissions extends BasePermissionsMigration
{
    public function up()
    {
        $permissions = [
             'view class codes' => ['Owner', 'Staff'],
             'create class codes' => ['Owner'],
             'update class codes' => ['Owner'],
             'delete class codes' => [],   // Admin only
             'view rates' => ['Owner', 'Staff'],
             'create rates' => ['Owner'],
             'update rates' => ['Owner'],
             'delete rates' => [],   // Admin only
        ];

        $this->createPermissions($permissions);
    }
}
