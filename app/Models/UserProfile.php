<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserProfile extends Model
{
    use SoftDeletes;

    protected $guarded = ['id', '_token'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function specialistAt()
    {
        return $this->belongsTo(ProjectCategory::class, 'specialist')->withTrashed();
    }
}
