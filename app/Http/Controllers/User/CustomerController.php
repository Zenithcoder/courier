<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = User::customers()->orderBy("name")->withCount("customer_orders")->paginate(getPaginateSize());
        return view('modified.admin.user.customer.index', compact('customers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::customers()->findOrFail($id);
        return view('admin.users.customers.show')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $user->role()->attach(Role::where('name', 'customer')->first());

        return redirect()->route('users.administrators.index')
            ->with('success','Admin successfully added!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('auth.user-profile-edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'lga_id' => 'required',
            'address' => 'required',
        ]);
        $user->update($request->all());
        $customer = $request->get('customer');
        $customer->update($request->except('email'));
        return redirect()->route('customers.orders.index2')->with('success','You have successfully updated your profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function myProfile()
    {
        $customer = \request()->get('customer');

        return view('user.customer-profile', compact('customer'));
    }

}
