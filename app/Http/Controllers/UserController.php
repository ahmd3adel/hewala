<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index' , ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8',
            'admin_password' => 'required|string', // Add validation for admin password
        ], [
            'name.required' => 'حقل الاسم مطلوب.',
            'name.unique' => 'حقل الاسم موجود بالفعل.',
            'name.string' => 'يجب أن يكون الاسم نصًا.',
            'name.max' => 'يجب ألا يتجاوز الاسم 255 حرفًا.',
            'password.required' => 'حقل كلمة المرور مطلوب.',
            'password.string' => 'يجب أن تكون كلمة المرور نصًا.',
            'password.min' => 'يجب أن تكون كلمة المرور على الأقل 8 أحرف.',
            'admin_password.required' => 'يجب إدخال كلمة مرور المسؤول.',
            'admin_password.string' => 'كلمة مرور المسؤول يجب أن تكون نصًا.',
        ]);

        // Retrieve the authenticated user
        $user = Auth::user();

        // Check if the authenticated user has set an admin password
        if (!$user->password) {
            throw ValidationException::withMessages([
                'admin_password' => ['يجب تعيين كلمة مرور للمسؤول أولاً.'],
            ]);
        }

        // Check if the authenticated user has the "admin" role
        if (!$user->role == 'admin') {
            throw ValidationException::withMessages([
                'admin_password' => ['لا تمتلك الصلاحية لإنشاء مستخدم.'],
            ]);
        }

        // Check if the provided admin password matches the authenticated user's admin password
        if (!Hash::check($request->admin_password, $user->password)) {
            throw ValidationException::withMessages([
                'admin_password' => ['كلمة مرور المسؤول غير صحيحة.'],
            ]);
        }

        // Create a new user instance
        $newUser = new User();
        $newUser->name = $validatedData['name'];
        $newUser->password = Hash::make($validatedData['password']);

        // Save the new user to the database
        $newUser->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'تم إنشاء المستخدم بنجاح.');
    }







    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('admin.users.show', compact('user'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
