<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'user_id', 'company_size', 'address', 'about_company'];
    public function user()
    {
        return $this->BelongsTo(User::class);
    }
}
