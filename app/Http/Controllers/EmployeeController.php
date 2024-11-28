<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

use App\Traits\UserValidation;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    use UserValidation;
    public function store(Request $request)
    {

        $validated = $request->validate(
            [
                'gender' => 'required|in:male,female,other',
                'name'=>'required|min:4'
            ]
        );
        
        // Creating database transaction to create an employee account and ennter data in respective tables
        DB::transaction(function() use ($request, $validated){
            $user = $this->validateAndCreateUser($request,'employee');
            Employee::create([
                'user_id'=>$user['id'],
                'gender'=>$validated['gender'],
            ]);
        });

        return redirect('/')->with('success','Account created successfully!');
    }
}
