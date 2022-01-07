<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'guard_name', 'uri', 'is_hidden', 'pid'
    ];

    /**
     * 关联到模型的数据表
     * @var string
     */
    protected $table = "permissions";

    public function ChildPermissions() {
        return $this->hasMany('App\Models\Permission', 'pid', 'id');
    }

    public function allChildrenPermissions(){
    return $this->ChildPermissions()->with('allChildrenPermissions');
    }
}
