<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserRoleController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        // Return a view or any other response as needed for the user role selection
        // For now, returning an empty response
        return response()->json([]);
    }

    public function update(Request $request): \Illuminate\Http\JsonResponse
    {
        $role = $request->input('role');
        session(['user_role' => $role]);

        // Return the updated user role as JSON response
        return response()->json(['user_role' => $role]);
    }
}
