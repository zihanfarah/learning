<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('profile')->simplePaginate(10);
        return view('page.user')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('page.register', [
            'title' => 'Register'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|max:255 ',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|confirmed|min:8|max:255',
            'birth' => 'required',
            'sex' => 'required'
        ]);

        $user = User::create($validated);

        $user->profile()->create([
            'birth' => $request->birth,
            'sex' => $request->sex
        ]);

        Alert::success('Success', 'User baru berhasil dibuat');

        return redirect('/user');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('page.show', ['user' => $user]);
    }

   
    public function edit(User $user)
    {
        return view('page.user-edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
    */
    public function update(User $user, Request $request) // yang mau diupdate siapa (user)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|confirmed|min:8|max:255',
            'birth' => 'required',
            'sex' => 'nullable'
        ]);
        // dd('duarr');

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $user->profile()->update([
            'birth' => $request->birth,
            'sex' => $request->sex,
        ]);

        Alert::success('Success', 'User berhasil diupdate');

        return redirect()->route('user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $title = 'Delete User';
        $text = 'Are you sure you want to delete this user?';

        Alert::warning($title, $text)
            ->showConfirmButton('Yes, delete it!', '#d33')
            ->showCancelButton('No, cancel', '#3085d6', [
                'onBeforeOpen' => 'function (modalElement) {
                    modalElement.querySelector("button.swal-button.swal-button--cancel").addEventListener("click", function (e) {
                        e.preventDefault();
                        Swal.close();
                    });
                }'
            ]);

        return redirect('/user');
    }
}
