<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit()
    {
        return view('welcome');
    }

    public function update(UpdateUserRequest $request)
    {
        return response()->json([
            'message' => "Thành công!"
        ]);
    }
}
