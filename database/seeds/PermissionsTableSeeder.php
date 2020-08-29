<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'crm_access',
            ],
            [
                'id'    => 18,
                'title' => 'adult_client_create',
            ],
            [
                'id'    => 19,
                'title' => 'adult_client_edit',
            ],
            [
                'id'    => 20,
                'title' => 'adult_client_show',
            ],
            [
                'id'    => 21,
                'title' => 'adult_client_delete',
            ],
            [
                'id'    => 22,
                'title' => 'adult_client_access',
            ],
            [
                'id'    => 23,
                'title' => 'wrap_up_access',
            ],
            [
                'id'    => 24,
                'title' => 'childline_create',
            ],
            [
                'id'    => 25,
                'title' => 'childline_edit',
            ],
            [
                'id'    => 26,
                'title' => 'childline_show',
            ],
            [
                'id'    => 27,
                'title' => 'childline_delete',
            ],
            [
                'id'    => 28,
                'title' => 'childline_access',
            ],
            [
                'id'    => 29,
                'title' => 'non_productive_create',
            ],
            [
                'id'    => 30,
                'title' => 'non_productive_edit',
            ],
            [
                'id'    => 31,
                'title' => 'non_productive_show',
            ],
            [
                'id'    => 32,
                'title' => 'non_productive_delete',
            ],
            [
                'id'    => 33,
                'title' => 'non_productive_access',
            ],
            [
                'id'    => 34,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
