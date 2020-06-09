<?php

namespace App\Traits;

use App\Role;
use App\Permission;
trait HasRolesAndPermissions
{
    /**
     * @return mixed
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class,'users_roles');
    }

    /**
     * @param mixed ...$roles
     * @return bool
     */
    public function hasRole($user_roles ) {
        foreach ($user_roles as $user_role) {
            if ($this->user_roles->contains('role_id', $user_role)) {
                return true;
            }
        }
        return false;
    }
}
