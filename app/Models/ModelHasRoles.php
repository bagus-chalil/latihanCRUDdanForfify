<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelHasRoles extends Model
{
    protected $guarded = [];
    protected $table = 'model_has_roles';
    public $timestamps = false;

    public function model_role()
    {
        return $this->hasOne(ModelHasRoles::class, 'model_id');
    }
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
