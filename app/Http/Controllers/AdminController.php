<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $admin = Admin::all();
        return view('admin.adminAfter', ['admin' => $admin]);
        dd($admin);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.adminLogin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'dept' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', /*'unique:users'*/],
            'password' => ['required', 'string', 'min:4']
        ]);
        $admin = new Admin([
            'name' => $request->get('name'),
            'dept' => $request->get('dept'),
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ]);
        $admin->save();

        // Via a request instance...
        $request->session()->put('name',  $admin->name);
        $request->session()->put('dept',  $admin->dept);
        $request->session()->put('email',  $admin->email);
        return redirect("admin")->with('sucess', 'New student is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
