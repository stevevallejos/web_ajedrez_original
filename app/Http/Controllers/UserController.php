<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RequestStoreUser;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestStoreUser $request)
    {
        //dd($request->all());
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        if($file = $request->file('foto')){
            $fileName =hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
            //dd ($fileName);
            $path = 'public/user/';
            $user->foto = $fileName;
            $file->storeAs($path,$fileName);
            $validated['product_image'] = $fileName;
        }
        $user->save();
        return redirect()->route('users.index');

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
