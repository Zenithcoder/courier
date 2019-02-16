<?php

namespace App\Http\Controllers\User;

use Auth;
use App\User;
use Paginate;
use App\Role;
use App\Lga;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RiderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.riders.index')->with('riders', User::riders()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $local = Lga::all();

        return view('admin.users.riders.create', compact('local'));
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

        $user->role()->attach(Role::where('name', 'rider')->first());

        return redirect()->route('users.riders.index')
            ->with('success','Rider successfully added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.users.riders.show')->with('rider', User::riders()->findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::riders()->findOrFail($id);
        $local = Lga::all();
        $roles = Role::get();

        return view('admin.users.riders.edit', compact('user','local', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { dd()
        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users,email,'.$id
          //  'password'=>'required|min:6|confirmed'
        ]);

        $input = $request->only(['name', 'email', 'address', 'city', 'lga_id', 'phone_number']);
        $roles = $request['roles'];

        $user = User::riders()->findOrFail($id);
        $user->fill($input)->save();

        if (isset($roles)) {
            $user->roles()->sync($roles);
        }
     /*   else {
            $user->roles()->detach();
        }*/
        return redirect()->route('users.riders.index')
            ->with('flash_message',
                'Rider successfully updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::riders()->findOrFail($id)->delete();

        return redirect()->route('users.riders.index')->with('success', 'Rider successfully deleted.');
    }
}
