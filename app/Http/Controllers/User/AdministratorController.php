<?php

namespace App\Http\Controllers\User;

use Auth;
use App\User;
use Paginate;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Lga;

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
       /* $admin = User::whereHas('roles', function($q)
        {
            $q->where('name', 'admin');
        })->get(); */

         $admin =  DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')->where('role_user.role_id',3)->get();
    
        return view('admin.users.administrators.index')->with('admin', $admin);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $local = Lga::all();
        return view('admin.users.administrators.create',compact('local'));
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

        if($request->hasfile('pic'))
        {
            $file = $request->file('pic');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }

        $user = User::create($request->only('name', 'email', 'password', 'address', 'city', 'lga_id', 'is_status', 'pic', 'phone_number'));

        $currentPhoto = $user->pic;

        if ($request->pic != $currentPhoto) {
            $name = time() . '.' . explode('/', explode(':', substr(
                    $request->pic,
                    0,
                    strpos($request->pic, ';')
                ))[1])[1];

            \Image::make($request->pic)->save(public_path('images/') . $name);

            $request->merge(['pic' => $name]);

            $userPhoto = public_path('images/') . $currentPhoto;

            if (file_exists($userPhoto)) {
                @unlink($userPhoto);
            }
        }

        $user->role()->attach(Role::where('name', 'admin')->first());

        return redirect()->route('users.administrators.index')
            ->with('success','Admin successfully added!');

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
      //  dd(1);
        $user = Role::where('name', 'admin')->first()->user()->findOrFail($id);

        return view('admin.users.administrators.edit', compact('user'));
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
            ->with('success',
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
            ->with('success',
                'Admin successfully deleted.');
    }
}
