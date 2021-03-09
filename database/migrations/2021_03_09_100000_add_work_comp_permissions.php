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
            'view wc rates' => ['Owner', 'Staff'],
            'create wc rates' => ['Owner'],
            'update wc rates' => ['Owner'],
            'delete wc rates' => [],   // Admin only
        ];

        $this->createPermissions($permissions);
    }
}
