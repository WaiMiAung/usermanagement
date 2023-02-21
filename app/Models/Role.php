<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Permission;
use App\Models\User;

class Role extends Model
{
    use HasFactory;

    protected $fillable=['name'];
    
    public function permissions()
    {
        return $this->belongsToMany(Permission::class,'role_permissions');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
