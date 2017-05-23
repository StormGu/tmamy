<?php

use App\User;

use Backpack\PermissionManager\app\Models\Permission;
use Backpack\PermissionManager\app\Models\Role;
use Illuminate\Database\Seeder;

class ConnectRelationshipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        /**
         * Get Available Permissions
         *
         */
        $permissions = Permission::all();

        /**
         * Attach Permissions to Roles
         *
         */
        $role = Role::where('name', '=', 'Admin')->first();
        foreach ($permissions as $permission) {
            if (!$role->hasPermissionTo($permission)) {
                $role->givePermissionTo($permission);
            }

        }
    }

}