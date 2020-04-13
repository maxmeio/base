<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Module extends Model
{
    use SoftDeletes;
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }
}