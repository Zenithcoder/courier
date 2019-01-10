<?php

namespace App\Http\Controllers\User;

use Auth;
use App\User;
use Paginate;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdministratorController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'auth.admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = User::whereHas('roles', function($q)
        {
            $q->where('name', 'admin');
        })->get();
        return view('admin.users.administrators.index')->with('admin', $admin);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('name', 'admin')->first()->user()->get();
        return view('admin.users.administrators.create', ['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:6'
        ]);

        $user = User::create($request->only('name', 'email', 'password', 'address', 'city', 'lga_id', 'is_status', 'pic', 'phone_num'));

        $roles = $request['roles'];

        if (isset($roles)) {

            foreach ($roles as $role) {
                $role_r = Role::where('id', '=', $role)->firstOrFail();
                $user->assignRole($role_r);
            }
        }

        return redirect()->route('users.administrators.index')
            ->with('flash_message',
                'Admin successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.users.administrators.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Role::where('name', 'admin')->first()->user()->findOrFail($id);

        return view('admin.users.administrators.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('users.administrators.index')
            ->with('flash_message',
                'Admin account updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.administrators.index')
            ->with('flash_message',
                'Admin successfully deleted.');
    }
}
