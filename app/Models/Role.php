<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use jeremykenedy\LaravelRoles\Contracts\RoleHasRelations as RoleHasRelationsContract;
use jeremykenedy\LaravelRoles\Traits\RoleHasRelations;
use jeremykenedy\LaravelRoles\Traits\Slugable;

class Role extends Model implements RoleHasRelationsContract
{
    use CrudTrait;
    use Slugable, RoleHasRelations;

    protected $fillable = ['name', 'slug', 'description', 'level'];

    public function __construct(array $attributes = []) {
        parent::__construct($attributes);

        if ($connection = config('roles.connection')) {
            $this->connection = $connection;
        }
    }
}
