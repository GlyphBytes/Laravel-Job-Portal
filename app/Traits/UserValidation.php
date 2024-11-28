<?php
namespace App\Traits;

use Illuminate\Http\Request;
use App\Models\User;

trait UserValidation
{
    public function validateAndCreateUser(Request $request, string $type): User
    {
        $validated = $request->validate(
            [
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|confirmed',
            ]
        );

        return User::create(
            [
                'email' => $validated['email'],
                'password' => $validated['password'],
                'type' => $type,
            ]
        );
    }
}
