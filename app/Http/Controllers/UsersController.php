<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id) {
        $user = User::find($id);

        if(!$user) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        return new UserResource($user);
    }

    public function store(Request $request) {
        $user = new User();
        $user->fill($request->all());
        $user->save();

        return response()->json($user, 201);
    }

    public function update(Request $request, $id) {
        $user = User::find($id);

        if(!$user) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $user->fill($request->all());
        $user->save();

        return response()->json($user);
    }
}
