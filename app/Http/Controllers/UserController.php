<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $dataUser = User::where('role', 'pengguna')->get();
        return view('admin.user.user-view', ['title' => 'User View'], compact('dataUser'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create-user', [
            'title' => 'User Create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'first_name' => 'required|max:225',
            'last_name' => 'required|max:225',
            'email' => 'required|email|unique:users',
            'nomor_telepon' => 'required',
            'password' => 'required|max:8',Password::min(6)->letters()->numbers()
        ]);
        
        User::create($validatedData);
        return redirect('users')->with('success', 'Data berhasil diubah !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
         return view('admin.user.edit-user', [
            'title' => 'Edit User',
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'first_name' => 'required|max:225',
            'last_name' => 'required|max:225',
            'image' => 'image|file|max:10000'
            // 'nomor_telepon' => 'required|unique:email'
        ];

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('user-images') ;
        }
        
        if ($request->email != $user->email) {
            $rules['email'] = 'required|unique:users';
        }

        $validatedData = $request->validate($rules);

        $validatedData['id'] = $user->id;
        User::where('id', $user->id)->update($validatedData);

        return redirect('users')->with('success', 'Data berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return back()->with('success', 'Data berhasil dihapus !');
    }
}
