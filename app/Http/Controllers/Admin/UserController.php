<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function UsersPage() : View {
        return view('backend.pages.userPage');
    }

    /** userList */
    public function userList() {
        $users = User::all();
        return response()->json([
            'users' => $users
        ], 200);
    }

    /** userInsert */
    public function userInsert(Request $request) {
        $validatedData = $request->validate([
            'name'     => 'required|string|max:50',
            'email'    => 'required|email|max:50|unique:users',
            'phone'    => 'nullable|string|max:11',
            'password' => 'required|string|min:5|confirmed',
            'status'   => 'required|in:active,inactive', // simpler alternative to enum validation
        ]);

        // Create user
        $user = User::create($validatedData);

        // Return JSON response
        return response()->json([
            'message' => 'User registered successfully!',
            'user'    => $user
        ], 200);
    }


    /** userDetails */
    public function userDetails(User $user) {
        return response()->json($user, 200);
    }


    /** userModify */
    public function userModify(User $user) {
        return response()->json($user, 200);
    }

    /** userUpdate */
    public function userUpdate(User $user, Request $request) {
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $user->update($data);
        return response()->json([
            'user' => $user
        ], 200);
    }

    /** userDelete */
    public function userDelete($user) {
        $user = User::find($user);
        $user->delete();
        return response()->json([
            'message' => 'User deleted successfully!'
        ], 200);
    }
}
