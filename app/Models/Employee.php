<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['user_id', 'cv', 'gender'];
    public function user()
    {
        return $this->BelongsTo(User::class);
    }
}
